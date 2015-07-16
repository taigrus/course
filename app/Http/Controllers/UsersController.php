<?php

namespace Course\Http\Controllers;

use Illuminate\Http\Request;

use Course\Http\Requests;
use Course\Http\Controllers\Controller;
use Course\User;

class UsersController extends Controller
{
    public function index()
    {
//        $users = User::select('id','first_name')
//            ->with('profile')
//            ->where('first_name','<>','Raúl')
//            ->orderBy('first_name','ASC')
//            ->get();
//        dd($users->toArray());
    }
}
