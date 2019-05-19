<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index() {
        return view('pages.homepage.index');
    }

    public function researchPaperGuidebook() {
        return "Guidebook not found";
        return response()->download(storage_path("app/public/comitee-files/research-paper-guidebook.zip"));
    }

	public function literatureReviewGuidebook() {
        return "Guidebook not found";
    return response()->download(storage_path("app/public/comitee-files/literature-review-guidebook.zip"));
    }

	public function scientificEssayGuidebook() {
        return "Guidebook not found";
        return response()->download(storage_path("app/public/comitee-files/essay-guidebook.zip"));
    }

	public function publicPosterGuidebook() {
        return "Guidebook not found";
    return response()->download(storage_path("app/public/comitee-files/public-poster-guidebook.zip"));
    }

	public function educationalVideoGuidebook() {
        return "Guidebook not found";
        return response()->download(storage_path("app/public/comitee-files/video-champaign-guidebook.zip"));
    }

}
