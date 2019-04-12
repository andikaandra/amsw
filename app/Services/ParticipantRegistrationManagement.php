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

    public function chooseCabang(array $data) {
        $this->_participantsRegistration->chooseCabang($data['user'], $data['competition']);
    }

    public function uploadData(array $data){
        $validator = Validator::make($data, [
            'university' =>  'required|max:255',
            'nama_bank' => 'required|max:255',
            'nama_pengirim' => 'required|max:255',
            'jumlah_tf' => 'required|max:10',
            'user' =>  'required',
            'jumlah_peserta' => 'required|numeric|min:3|max:6',
        ]);

        if (strlen(str_replace('.','',$data['jumlah_tf']))>=10) {
            return redirect()->back()->withErrors(['Transfer amount'=>'Wrong number format']);
        }

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

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

            $this->_participantsRegistration->newParticipant($data['user'], $data['nama'.$i], $file_path);
        }

        $path = $data['bukti_pembayaran']->store('public/payments');
        
        $this->_participantsRegistration->newPayment(['user_id' => $data['user'], 'competition' => Auth::user()->competition, 'file_path' => str_replace("public","", $path), 'bank_account_name' => $data['nama_pengirim'], 'bank_name' => $data['nama_bank'], 'payment_type' => 'group', 'amount' => str_replace('.','',$data['jumlah_tf'])]);

    }
}

?>