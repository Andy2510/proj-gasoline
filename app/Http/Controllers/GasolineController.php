<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GasolinesController extends Controller
{
    public function getGasoline() {
    	return view('gasolines');
    }
}
