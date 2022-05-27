<?php

namespace App\Http\Controllers;

class locatoreController extends Controller {

    public function __construct() {
        $this->middleware('isLocatore');
    }

    public function areaLocatore() {
        return view('areaLocatore');
    }

}