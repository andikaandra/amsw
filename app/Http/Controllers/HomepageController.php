<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index() {
        return view('pages.homepage.index');
    }

    public function researchPaperGuidebook() {
        return response()->download(storage_path("app/public/comitee-files/Guideline_AMSW_2019_Research_Paper.zip"));
    }

	public function literatureReviewGuidebook() {
        return response()->download(storage_path("app/public/comitee-files/Guideline_AMSW_2019_Literature_Review.zip"));
    }

	public function scientificEssayGuidebook() {
        return response()->download(storage_path("app/public/comitee-files/Guideline_AMSW_2019_Essay.zip"));
    }

	public function publicPosterGuidebook() {
        return response()->download(storage_path("app/public/comitee-files/Guideline_AMSW_2019_Public_Poster.zip"));
    }

	public function educationalVideoGuidebook() {
        return response()->download(storage_path("app/public/comitee-files/Guideline_AMSW_2019_Education_Video.zip"));
    }

}
