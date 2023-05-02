<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;

class ContactController extends Controller
{
    function insertData(Request $req){
            $email = $req->get('email');
            $message = $req->get('message');
            $contact = new ContactModel();
            $contact->cf_email = $email;
            $contact->cf_message = $message;
            $contact->save();

            return redirect('');
        }

    function readData(){
        $read = ContactModel::all();
        return view('frontend.pages.Dashboard',['data'=>$read]);
    }

}
