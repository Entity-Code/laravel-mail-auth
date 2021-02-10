<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\mailTest;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function sendMail(Request $request) {
        //validazione
        $data = $request -> validate([
            'mailText' => 'required|min:5|max:255'
        ]);
		//la inviamo all'user collegato
        
        Mail::to(Auth::user() -> email)
		//$data['StringaPassataNelForm']
            -> send(new mailTest($data['mailText']));
        return redirect() -> back();
    }

    public function index()
    {
        return view('home');
    }
}
