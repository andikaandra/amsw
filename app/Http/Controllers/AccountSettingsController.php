<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountSettingsController extends Controller
{
//    TODO: Refactor
//    admin
    public function accountSettingsPage()
    {
        $user = request()->user();
        return view('pages.admin.settings.index', ['user' => $user]);
    }

    public function changePassword(Request $request)
    {
        $user = $request->user()->update(['password' => bcrypt($request->password)]);
        return redirect()->back()->with('success', 'Password succesfully changed!');
    }

    public function accountSettingsPageParticipant()
    {
        $user = request()->user();
        return view('pages.participant.settings.index', ['user' => $user]);
    }

    public function changePasswordParticipant(Request $request)
    {
        $user = $request->user()->update(['password' => bcrypt($request->password)]);
        return redirect()->back()->with('success', 'Password succesfully changed!');
    }
}
