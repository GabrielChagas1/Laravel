<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;

class HomeController extends Controller
{
    //
    public function index(){
        // $registros = Curso::all();
        $registros = Curso::paginate(3);
        return view('home', compact('registros'));
    }
}
