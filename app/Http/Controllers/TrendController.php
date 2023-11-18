<?php

namespace App\Http\Controllers;

use App\Models\Trend;
use Illuminate\Http\Request;

class TrendController extends Controller
{
    public function index(){
        return Trend::all();
    }
}
