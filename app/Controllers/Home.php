<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function aboutme(): string
    {
        return view('aboutme');
    }
	
	public function edukasi(): string
    {
        return view('edukasi');
    }

}
