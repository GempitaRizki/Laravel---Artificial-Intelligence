<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AIController extends Controller
{
    public function index(){
        return view('ai.index');
    }

    public function result(){
        return view('ai.index', ['result' => 'Setiap kata 
        ter-generate menggunakan AI']);
    }
}
