<?php
namespace App\Services;

use App\Contracts\Repositories\IParticipantRegistrationRepository;
use App\Contracts\IParticipantRegistrationManagement;
use Illuminate\Http\Request;
use App\Models\Participant;
use App\Models\Competition;
use App\Models\Payment;
use App\Models\User;
use Validator;
use Auth;

class ParticipantRegistrationManagement implements IParticipantRegistrationManagement
{
    // this variable holds repository for participant
    private $_participantsRegistration;
    function __construct(IParticipantRegistrationRepository $repo) {
        $this->_participantsRegistration = $repo;
    }

    public function completeTour($id){
        $this->_participantsRegistration->completeTour($id);
    }

    public function getAllLomba() {
        return $this->_participantsRegistration->getAllLomba();
    }

    public function getMyLomba($name) {
        return $this->_participantsRegistration->getMyLomba($name);
    }

    public function resetData($id) {
        if (Auth::user()->status>=3) {
            return redirect('participant')->withErrors(['Error'=>'Whoops, something wrong!']);
        }
        $this->_participantsRegistration->resetData($id);
    }

    public function chooseCabang(array $data) {
        if (Auth::user()->status>=2) {
            return redirect('participant')->withErrors(['Error'=>'Whoops, something wrong!']);
        }
        $this->_participantsRegistration->chooseCabang($data['user'], $data['competition']);
    }

    public function uploadData(array $data){
        //check cabang open or not
        $status = $this->_participantsRegistration->checkCabangOpen(Auth::user()->competition);
        if (!$status) {
            return redirect('participant')->withErrors(['Error'=>"We're sorry. The registration for " . Auth::user()->competition . " isn't opened yet."]);
        }
        
        $data['jumlah_tf'] = str_replace('.','',$data['jumlah_tf']);

        $validator = Validator::make($data, [
            'university' =>  'required|max:255',
            'nama_bank' => 'required|max:255',
            'nama_pengirim' => 'required|max:255',
            'jumlah_tf' => 'required|max:10|regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/',
            'user' =>  'required',
            'jumlah_peserta' => 'required|numeric|min:3|max:6',
            'bukti_pembayaran' => 'required|image|max:2000'
        ]);        

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        $this->_participantsRegistration->changeUniversity($data['user'], $data['university']);

        $rules = [];

        for ($i=1; $i <=$data['jumlah_peserta'] ; $i++) {
            $rules['nama'.$i] = 'required|max:255';
            $rules['file'.$i] = 'bail|required|max:6000|mimes:zip';
        }

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $competition = $this->_participantsRegistration->newCompetition($data['user'], Auth::user()->competition);

        $user = $this->_participantsRegistration->changeStatus($data['user'], 3);

        for ($i=1; $i <=$data['jumlah_peserta'] ; $i++) {
            $file_path = $data['file' . $i]->store('public/file-participants');

            $this->_participantsRegistration->newParticipant($competition->id, $data['nama'.$i], $file_path);
        }

        $path = $data['bukti_pembayaran']->store('public/payments');
        
        $this->_participantsRegistration->newPayment(['user_id' => $data['user'], 'competition' => Auth::user()->competition, 'file_path' => str_replace("public","", $path), 'bank_account_name' => $data['nama_pengirim'], 'bank_name' => $data['nama_bank'], 'payment_type' => 'group', 'amount' => str_replace('.','',$data['jumlah_tf'])]);

    }

    public function uploadSubmission(array $data) {
        $status = $this->_participantsRegistration->checkCabangSubmissionOpen(Auth::user()->competition);
        if (!$status) {
            return redirect('participant')->withErrors(['Error'=>'Whoops, something wrong!']);
        }
        //todo: spesifikasikan jumlah max size sesuai cabang (kalau ada)
        if (Auth::user()->competition == "Educational Video") {
            $validator = Validator::make($data, [
                'title' => 'required|max:128',
                'description' => 'required|max:2000',
                'file' => 'required|max:255'
            ]);
        }
        else{
            $validator = Validator::make($data, [
                'title' => 'required|max:128',
                'description' => 'required|max:2000',
                'file' => 'bail|required|max:8000|mimes:zip'
            ]);
        }

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if (Auth::user()->competition == "Educational Video") {
            $path = $data['file'];
        }
        else{
            $path = str_replace("public","", $data['file']->store('public/submissions'));
        }
        
        $this->_participantsRegistration->newSubmission(['competition_id' => Auth::user()->competitions[0]->id, 'competition_user_id' => $data['user'], 'title' => $data['title'], 'description' => $data['description'], 'file_path' => $path]);

        $user = $this->_participantsRegistration->changeStatus($data['user'], 5);
    }
}

?>