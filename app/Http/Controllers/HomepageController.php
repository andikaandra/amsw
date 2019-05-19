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
        return response()->download(storage_path('app') .'/public/amsw-files/guidebook/research-paper-guidebook.zip');
    }

	public function literatureReviewGuidebook() {
        return "Guidebook not found";
        return response()->download(storage_path('app') .'/public/amsw-files/guidebook/literature-review-guidebook.zip');
    }

	public function scientificEssayGuidebook() {
        return "Guidebook not found";
        return response()->download(storage_path('app') .'/public/amsw-files/guidebook/essay-guidebook.zip');
    }

	public function publicPosterGuidebook() {
        return "Guidebook not found";
        return response()->download(storage_path('app') .'/public/amsw-files/guidebook/public-poster-guidebook.zip');
    }

	public function educationalVideoGuidebook() {
        return "Guidebook not found";
        return response()->download(storage_path('app') .'/public/amsw-files/guidebook/video-champaign-guidebook.zip');
    }

}
