<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $email = session('email');
        return view('index', ['email' => $email]);
    }
}