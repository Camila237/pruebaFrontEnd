<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function vista(){
        return view('form');
    }

    public function create(Request $request){
        $car = new Car();

        $car -> nombre = $request -> nombre;
        $car -> descripcion = $request -> descripcion;
        $car -> imagen = $request -> imagen;
        $car -> save();

        return redirect('/');
    }
}
