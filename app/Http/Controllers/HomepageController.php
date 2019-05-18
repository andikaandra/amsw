<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index() {
        return view('pages.homepage.index');
    }

    public function researchPaper() {
        return view('pages.homepage.researchPaper');
    }

	public function literatureReview() {
        return view('pages.homepage.literatureReview');
    }

	public function scientificEssay() {
        return view('pages.homepage.scientificEssay');
    }

	public function publicPoster() {
        return view('pages.homepage.publicPoster');
    }

	public function educationalVideo() {
        return view('pages.homepage.educationalVideo');
    }

}
