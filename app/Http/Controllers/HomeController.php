<?php

namespace App\Http\Controllers;

use illuminate\http\Request;
use illuminate\Contracts\view\View;

class HomeController extends Controller
{
    public function index(): View{
        return view(view: "app.frontend.index");
    }
}