<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Http\Requests;
use App\ContactMessage;
use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactFormSubmitted;

class PageController extends Controller
{
    public function index() {

    	return view('frontend.index');
    	
    }

    public function showContactForm() {

        $user = auth()->user();
    	return view('frontend.contact');

    }

    public function contact(ContactFormRequest $request) {

    	$contactMessage = new ContactMessage();

    	$contactMessage->name = $request->name;
    	$contactMessage->email = $request->email;
    	$contactMessage->message = $request->message;
    	$contactMessage->save();

    	Mail::send(new ContactFormSubmitted($contactMessage));

    	return redirect()->back()->with('success', 'Thanks for contact us, we will reply soon');

    }
}
