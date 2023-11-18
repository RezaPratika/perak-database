<?php

namespace App\Http\Controllers;

use App\Models\UserData;
use Illuminate\Http\Request;

class UserDataController extends Controller
{
    public function index(){
        return UserData::all();
    }
}
