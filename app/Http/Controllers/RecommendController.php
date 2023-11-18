<?php

namespace App\Http\Controllers;

use App\Models\Recommend;
use Illuminate\Http\Request;

class RecommendController extends Controller
{
    public function index(){
        return Recommend::all();
    }
}
