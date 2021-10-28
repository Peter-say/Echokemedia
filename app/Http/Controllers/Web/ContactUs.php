<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUs extends Controller
{
    public function index()
    {
        return view('web.contact');
    }

    public function storeContact(Request $request, ContactUs $contact)
    {
     

       $data = $request->save();
      
    }
}
