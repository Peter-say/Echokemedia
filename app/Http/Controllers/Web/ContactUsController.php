<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('web.contact');
    }

    public function storeContact(Request $request, ContactUs $contact)
    {


        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'subject' => 'nullable',
            'message' => 'required'
        ]);



        $request = ContactUs::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ]);

        return back()->with(
            'success_message',
            'Your message has been sent. We will reach you as soon as possible'
        );
    }
}
