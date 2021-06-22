<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class HomeController extends Controller
{
    public function index() {

        $movieData = Movie::all();

        $viewData = [
            "movieList" => $movieData,
        ];
        
        
        return view('myHome', $viewData);
    }
}
