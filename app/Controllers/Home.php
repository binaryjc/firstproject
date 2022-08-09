<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function sample_page()
    {
       echo 'this is a sample page';
    }
}
