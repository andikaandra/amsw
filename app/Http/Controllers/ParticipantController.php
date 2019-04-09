<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Log;

class ParticipantController extends Controller
{
    public function index() {
        return view('pages.participant.index');
    }

    public function registrationPage() {
        return view('pages.participant.registration');
    }
}
