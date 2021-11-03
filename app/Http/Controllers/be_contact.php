<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shops;

class be_contact extends Controller
{
    
    public function index()
    {
        $account = session('account');
        $contact = shops::all();
        return view('be_contact.index' , ['account' => $account ,'contact' => $contact]);
    }
    
}
