<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Faker\Factory as Faker;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function generateData()
    {
        
    }

    public function index()
    {
        return view('dashboard.index');
    }
}
