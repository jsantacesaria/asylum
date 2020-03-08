<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactsController extends Controller
{

   public function thanks() {
     return view('thanks');
   }

   public function create() {
     return view('contact');
   }

    public function store() {
/*
     $contact = new \App\Contact();
     $contact->contact_name = request('contact_name');
     $contact->email = request('email');
     $contact->comments = request('comments');

     $contact->save();
*/

     Contact::create([
       'contact_name' => request('contact_name'),
       'email' => request('email'),
       'comments' => request('comments')
     ]);

     return redirect('thanks');
   }

}
