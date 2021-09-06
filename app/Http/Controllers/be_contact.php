<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shops;

class be_contact extends Controller
{
    
    public function index()
    {
        $contact = shops::all();
        return view('be_contact.index' , ['contact' => $contact]);
    }
    
}
