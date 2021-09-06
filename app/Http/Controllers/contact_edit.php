<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shops;

class contact_edit extends Controller
{
    
    public function index()
    {
        $contact = shops::all();
        return view('contact_edit.index' , ['contact' => $contact]);
    }

    public function contact_edit(Request $request)
    {
        $shop = shops::where('Shop_name','臺中科技大學')->first();
        
        $content = $request->validate([
            'Shop_tel' => 'required',
            'Shop_email' => 'required'
        ]);
        $shop->update($content);
        return back()->with('notice','修改成功!');
    }
}
