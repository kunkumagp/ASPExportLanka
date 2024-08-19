<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\View\View;

class UserController extends Controller
{
    public function login(): View
    {
        return view('login');
    }

}
