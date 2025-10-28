<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainsTabController extends Controller
{
    public function index(){

        $trains = Train::all();

        return view('tab', compact('trains'));
    }
}
