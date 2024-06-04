<?php

namespace App\Http\Controllers;


use App\Models\Car;


class CarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }


}

