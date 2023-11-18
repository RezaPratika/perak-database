<?php

namespace App\Http\Controllers;

use App\Models\LanjutNonton;
use Illuminate\Http\Request;

class LanjutNontonController extends Controller
{
    public function index(){
        return LanjutNonton::all();
    }
}
