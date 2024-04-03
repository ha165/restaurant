<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RecomendationController extends Controller
{
    public function index()
    {
        $recomendations = Restaurant::all();
        return view('admin.pages.recomendations',compact('recomendations'));
    }
}
