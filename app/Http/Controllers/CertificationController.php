<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificationController extends Controller
{
    public function index()
    {
        return view('layouts.certification.index');
    }

    public function details()
    {
        return view('layouts.certification.details');
    }
}
