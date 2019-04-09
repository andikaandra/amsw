<?php
namespace App\Contracts;

interface IParticipantRegistrationManagement {
    public function updateRegistration($type, array $data);
}
?>