<?php

namespace App\Http\Controllers;

use App\Models\primer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
      $data['getDat'] = primer::getDat();
        return view('user.index', $data);
    }
}
