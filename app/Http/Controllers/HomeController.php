<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use App\Models\Restaurant;
use App\Models\Food;

class HomeController extends Controller
{
  public function index()
  {
    $rest = Restaurant::all();
    $foods = Food::all();
    return view('home',['rest'=>$rest,'foods'=>$foods]);
  }
  public function redirects()
  {
    $usertype = Auth::user()->usertype;
    if ($usertype == '1') {
      return view('admin.dashboard');
    } else {
      $rest = Restaurant::all();
      $foods = Food::all();
      return view('home',['rest'=>$rest,'foods'=>$foods]);
    }
  }
}
