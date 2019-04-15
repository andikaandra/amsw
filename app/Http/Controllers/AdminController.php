<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('pages.admin.index');
    }

    public function essayRegistration() {
        return view('pages.admin.registrations.essay');
    }
}
