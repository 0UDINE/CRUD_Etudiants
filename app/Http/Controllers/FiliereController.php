<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FiliereController extends Controller
{
    public function index(){
        $filieres = DB::table("filieres")->get();
        dd($filieres);
    }
}
