<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SendMessages extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }


    public function index()
    {
        return view('form');
    }

    public function saveToken(Request $request)
    {
        // auth()->user()->update(['device_token' => $request->token]);
        User::where('id', Auth::user()->id)
            ->update([
                'device_token' => $request->token
            ]);
        return response()->json(['token saved succesfuly']);
    }

    public function sendNotification(Request $request)
    {
    }
}
