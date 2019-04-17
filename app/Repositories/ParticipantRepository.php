<?php
namespace App\Repositories;

// use required dependencies
use App\Models\Competition;
use App\Models\User;
use App\Contracts\Repositories\IParticipantRepository;

class ParticipantRepository implements IParticipantRepository
{
    public function getAllParticipants() {
        return Competition::all();
    }

    public function acceptTeam($id, array $data) {
        $comp = Competition::find($id);
        $comp->update($data);
        return $comp->user()->update(['status' => 4]);
    }

    public function declineTeam($id) {
        $comp = Competition::find($id);
        return $comp->update(['verification_status' => 'declined', 'payment_status' => 'declined']);        
    }

    public function getAllEmailVerifiedTeams($competition) {
        return User::where('email_verification', 'verified')->where('role', 'participant')
        ->where('competition', $competition)
        ->whereHas('competitions')
        ->with(['competitions:id,user_id,wave,verification_status,created_at'])->get();
    }

    public function getParticipantsByCompId($id) {        
        return Competition::with(['participants', 'user.payments'])->find($id);
    }

    public function getWaitingList($competition) {
        return User::where('status', '>=', 6)
        ->where('competition', $competition)
        ->with('competitions')->get();
    }


}


?>