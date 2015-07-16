<?php

namespace Course\Http\Controllers;

use Illuminate\Http\Request;

use Course\Http\Requests;
use Course\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return View('home');
    }
}
