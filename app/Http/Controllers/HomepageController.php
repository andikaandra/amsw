<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index() {
        return view('pages.homepage.index');
    }

    public function researchPaperGuidebook() {
        return response()->download(storage_path("app/public/comitee-files/AMSW-2019-registration-guideline.zip"));
    }

	public function literatureReviewGuidebook() {
        return response()->download(storage_path("app/public/comitee-files/AMSW-2019-registration-guideline.zip"));
    }

	public function scientificEssayGuidebook() {
        return response()->download(storage_path("app/public/comitee-files/AMSW-2019-registration-guideline.zip"));
    }

	public function publicPosterGuidebook() {
        return response()->download(storage_path("app/public/comitee-files/AMSW-2019-registration-guideline.zip"));
    }

	public function educationalVideoGuidebook() {
        return response()->download(storage_path("app/public/comitee-files/AMSW-2019-registration-guideline.zip"));
    }

}
