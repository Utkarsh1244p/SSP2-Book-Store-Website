<?php

namespace App\Controllers;

class ProductController extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
}
