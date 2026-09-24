<?php

namespace App\Controllers;

class Services extends BaseController
{
    public function index()
    {
        return view('services/index');
    }

    public function detail($slug)
    {
        return view('services/detail', [
            'slug' => $slug
        ]);
    }
}