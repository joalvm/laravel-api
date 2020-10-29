<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Components\Controller;
use Illuminate\Support\Facades\Response;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return Response::json(['version' => '1.0']);
    }
}
