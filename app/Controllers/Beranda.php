<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class WelcomeController extends Controller
{
    public function index()
    {
        echo view('beranda');
       // echo view('part/topbar');
       // echo view('part/navbar');
       
    }

    public function aboutme()
    {
        echo view('aboutme')
    }
}