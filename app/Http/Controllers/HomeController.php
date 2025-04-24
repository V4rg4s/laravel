<?php

namespace App\Http\Controllers;

use App\Models\Product;
use illuminate\http\Request;
use illuminate\Contracts\view\View;

class HomeController extends Controller
{
    public function index(): View
    {
        
        return view('app.frontend.index');
    }
}