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
    public function chooseCabang($id, $competition) {
  		User::where('id', $id)->update(['status' => 2, 'competition' => $competition]);
    }

    public function resetData($id) {
      User::find($id)->update(['competition' => NULL]);
      $this->changeStatus($id, 1);
    }

    public function newCompetition($id, $type) {
      return Competition::create([
          'user_id' => $id,
          'type' => $type,
          'payment_status' => 'unverified',
          'verification_status' => 'unverified',
          'competition_status' => 'group',
          'wave' => 1,
      ]);
    }

    public function changeStatus($id, $status) {
      return User::find($id)->update(['status' => $status]);
    }

    public function newParticipant($id, $name, $path) {
      Participant::create([
          'competition_id' => $id,
          'name' => $name,
          'file_path' => str_replace("public","", $path),
      ]);
    }

    public function newPayment(array $data) {
      Payment::create($data);
    }

}

?>