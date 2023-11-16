<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function view_contacts(){
        $user_id_current = Auth::id();
        $user = User::all();
        
        $contacts = Contacts::all();
        $page = Contacts::paginate(7);
        return view('admin.contacts',['contacts'=>$page,'page'=>$page, 'users'=>$user, 'user_id_current'=>$user_id_current]);
    }

    public function create_contact(Request $request){
        $contact = new Contacts;

        $contact->name = $request['name'];
        $contact->email = $request['email'];
        $contact->subject = $request['subject'];
        $contact->message = $request['message'];

        $contact->save();
        return redirect('/contact')->with('success', 'Your message has been sent. Thank you!');
    }

    public function delete_contact($id){
        $contact = Contacts::find($id);
        $contact->delete();

        $successs = 'Delete successfully.';
        return redirect('/contacts')->with('success', $successs);
    }
}