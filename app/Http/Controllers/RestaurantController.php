<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('admin.pages.restaurants',compact('restaurants'));
    }
    public function create()
    {
        return view('admin.newrest');
    }
    public function findMatching(Request $request)
    {
        $price = $request->input('price');
        $foodType = $request->input('food_type');
        $location = $request->input('location');

        // Query the database to find exact matching records
        $exactMatches = Restaurant::where('price', $price)
            ->where('food_type', $foodType)
            ->where('location', $location)
            ->get();

        // If no exact matches found, find closest matches based on each parameter
        if ($exactMatches->isEmpty()) {
            $closestMatches = Restaurant::orderByRaw("
                ABS(price - $price) +
                IF(food_type = '$foodType', 0, 1) +
                IF(location = '$location', 0, 1)
            ")->take(5)->get(); // Adjust the number of closest matches as needed
            
            // Pass the closest matches to the view
            return view('restaurants.index', ['restaurants' => $closestMatches]);
        }

        // Pass the exact matches to the view
        return view('restaurants.index', ['restaurants' => $exactMatches]);
    }
}
