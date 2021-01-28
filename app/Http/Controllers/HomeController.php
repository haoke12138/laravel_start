<?php

namespace App\Http\Controllers;

use App\Tool\Upload;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function uploadAvatar(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            $userId = $request->user()->id;
            $avatar = Upload::audiovisual($request, 'file');
//            User::
        }
        return view('resource/upload-avatar');
    }
}
