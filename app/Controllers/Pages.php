<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        return view('landing');
    }

    public function about()
    {
        return view('about');
    }
}
