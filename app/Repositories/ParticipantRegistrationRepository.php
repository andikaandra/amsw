<?php
namespace App\Repositories;

// use required dependencies
use App\Contracts\Repositories\IParticipantRegistrationRepository;
use Illuminate\Http\Request;
use App\Models\Participant;
use App\Models\Competition;
use App\Models\Payment;
use App\Models\User;
use Validator;
use Auth;

class ParticipantRegistrationRepository implements IParticipantRegistrationRepository
{
    public function chooseCabang(Request $request) {
		User::where('id', $request->user)->update(['status' => 2, 'competition' => $request->competition]);
    }

    public function uploadData(Request $request) {

        $validator = Validator::make($request->all(), [
            'university' =>  'required',
            'nama_bank' => 'required',
            'nama_pengirim' => 'required',
            'jumlah_tf' => 'required',
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
            $rules['cv'.$i] = 'bail|required|max:1024|mimes:pdf';
            $rules['foto'.$i] = 'bail|required|max:1024|mimes:jpeg,jpg,png';
            $rules['ktp'.$i] = 'bail|required|max:1024|mimes:jpeg,jpg,png';
            $rules['ktm'.$i] = 'bail|required|max:1024|mimes:jpeg,jpg,png';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
          return redirect()->back()->withErrors($validator)->withInput();
        }

        $competition = Competition::create([
          	'user_id' => $request->user,
          	'type' => Auth::user()->competition,
          	'payment_status' => 'unverified',
          	'verification_status' => 'unverified',
          	'competition_status' => 'group',
          	'wave' => 1,
        ]);

        $user = User::find($request->user)->update([
          	'status' => 3,
        ]);

        for ($i=1; $i <=$request->jumlah_peserta ; $i++) {
			$cv_path = $request->file('cv' . $i)->store('public/file-participants/cv');
			$foto_path = $request->file('foto' . $i)->store('public/file-participants/foto');
			$ktp_path = $request->file('ktp' . $i)->store('public/file-participants/ktp');
			$ktm_path = $request->file('ktm' . $i)->store('public/file-participants/ktm');

			Participant::create([
				'competition_id' => $competition->id,
				'name' => $request->{'nama'.$i},
	            'cv_path' => str_replace("public","", $cv_path),
	            'foto_path' => str_replace("public","", $foto_path),
	            'ktp_path' => str_replace("public","", $ktp_path),
	            'ktm_path' => str_replace("public","", $ktm_path),
        	]);
        }

        $path = $request->file('bukti_pembayaran')->store('public/payments');
        // upload payment details
        Payment::create([
          	'user_id' => $request->user,
          	'competition' => Auth::user()->competition,
          	'file_path' => str_replace("public","", $path),
          	'bank_account_name' => $request->nama_pengirim,
          	'bank_name' => $request->nama_bank,
          	'payment_type' => 'group',
          	'amount' => str_replace('.','',$request->jumlah_tf)
        ]);

    }
}

?>