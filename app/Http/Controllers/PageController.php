<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $username = session('username');
        return view('index', ['username' => $username]);
    }
}