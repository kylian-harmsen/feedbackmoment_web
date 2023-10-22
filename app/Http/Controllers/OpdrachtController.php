<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpdrachtController extends Controller
{
    public function show()
    {
        $name = "kylian";
        $fruits = Fruit::all();
        return view('opdracht', ['name' => $name, 'fruits' => $fruits]);
    }
}
