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
        $oldtel = shops::where('Shop_name','臺中科技大學')->pluck('Shop_tel');
        $oldemail = shops::where('Shop_name','臺中科技大學')->pluck('Shop_email');
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $content = $request->validate([  //驗證  
            'tel' => 'required',
            'email' => 'required'
        ]);
        if(($oldtel != '["' . $tel . '"]') || ($oldemail != '["' . $email . '"]')){
            $shop->Shop_tel = $tel;
            $shop->Shop_email = $email;
            $shop->save();
            return back()->with('notice','修改成功！');
        }else{
            return back()->with('notice','請對資料做變動！');
        }
        
    }
}
