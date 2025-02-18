<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
        return 'Hello World';
    }

    public function About() {
        return 'Nama Saya Alex';
    }

    public function greeting(){
        return view('blog.hello')
        ->with('name','Alex')
        ->with('occupation','Astronaut And IT');
    }


}
