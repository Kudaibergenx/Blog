<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function __invoke()
    {
        return view('layouts.main');
    }
}
