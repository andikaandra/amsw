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

    public function uploadData(Request $request){
        $validator = Validator::make($request->all(), [
            'university' =>  'required',
            'nama_bank' => 'required',
            'nama_pengirim' => 'required',
            'jumlah_tf' => 'required|max:10',
            'user' =>  'required',
            'jumlah_peserta' => 'required',
        ]);

        if (strlen(str_replace('.','',$request->jumlah_tf))>=10) {
            return redirect()->back();
        }

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $rules = [];

        for ($i=1; $i <=$request->jumlah_peserta ; $i++) {
            $rules['nama'.$i] = 'required';
            $rules['file'.$i] = 'bail|required|max:6000|mimes:zip';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $competition = $this->_participantsRegistration->newCompetition($request->user, Auth::user()->competition);

        $user = $this->_participantsRegistration->changeStatus($request->user, 3);

        for ($i=1; $i <=$request->jumlah_peserta ; $i++) {
            $file_path = $request->file('file' . $i)->store('public/file-participants');

            $this->_participantsRegistration->newParticipant($request->user, $request->{'nama'.$i}, $file_path);
        }

        $path = $request->file('bukti_pembayaran')->store('public/payments');
        
        $this->_participantsRegistration->newPayment(['user_id' => $request->user, 'competition' => Auth::user()->competition, 'file_path' => str_replace("public","", $path), 'bank_account_name' => $request->nama_pengirim, 'bank_name' => $request->nama_bank, 'payment_type' => 'group', 'amount' => str_replace('.','',$request->jumlah_tf)]);

    }
}

?>