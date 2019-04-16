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

    public function litRevRegistration() {
        return view('pages.admin.registrations.litrev');
    }

    public function pubPosRegistration() {
        return view('pages.admin.registrations.pubpos');
    }

    public function researchPaperRegistration() {
        return view('pages.admin.registrations.research-paper');
    }

    public function educationalVideoRegistration() {
        return view('pages.admin.registrations.educational-video');
    }

    public function educationalVideoSubmission() {
        return view('pages.admin.submissions.educational-video');
    }

    public function essaySubmission() {
        return view('pages.admin.submissions.essay');
    }

    public function litrevSubmission() {
        return view('pages.admin.submissions.litrev');
    }

    public function pubposSubmission() {
        return view('pages.admin.submissions.pubpos');
    }

    public function researchPaperSubmission() {
        return view('pages.admin.submissions.research-paper');
    }
}
