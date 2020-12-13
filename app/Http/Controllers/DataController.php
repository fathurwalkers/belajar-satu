<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory as Faker;

class DataController extends Controller
{
    public function generateData()
    {
        $faker = Faker::create('id_ID');
    }

    public function index()
    {
        return view('dashboard.index');
    }
}
