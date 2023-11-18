<?php

namespace App\Http\Controllers;

use App\Models\DataImageSlider;
use Illuminate\Http\Request;

class DataImageSliderController extends Controller
{
    public function index(){
        return DataImageSlider::all();
    }
}
