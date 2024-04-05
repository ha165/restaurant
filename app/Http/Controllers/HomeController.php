<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use App\Models\Restaurant;
use App\Models\Food;
use App\Models\Category;

class HomeController extends Controller
{
  public function index()
  {
    $categories = Category::all();
    $rest = Restaurant::all();
    $foods = Food::all();
    return view('home',['rest'=>$rest,'foods'=>$foods,'categories'=>$categories]);
  }
  public function redirects()
  {
    $usertype = Auth::user()->usertype;
    if ($usertype == '1') {
      return view('admin.dashboard');
    } else {
       $categories = Category::all();
      $rest = Restaurant::all();
      $foods = Food::all();
      return view('home',['rest'=>$rest,'foods'=>$foods,'categories'=>$categories]);
    }
  }
}
