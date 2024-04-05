<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Support\Facades\DB;

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
    public function searchRestaurants(Request $request)
    {
        // Retrieve user input
        $price = $request->input('price_range');
        $location = $request->input('location');
        $rating = $request->input('rating');
        $categoryId = $request->input('category_id');
        $foodId = $request->input('food_id');

        // Perform database query to find matching restaurants
        $query = DB::table('restaurants')
            ->where('location', 'LIKE', "%$location%")
            ->where('rating', '>=', $rating)
            ->where('price_range', 'LIKE', "%$price%");

        if ($categoryId) {
            $query->where('category_id', $categoryId);
        }

        if ($foodId) {
            $query->where('food_id', $foodId);
        }

        $restaurants = $query->get();

        // If no exact matches found, find closest matches based on location, rating, and price range
        $closestMatches = [];
        if ($restaurants->isEmpty()) {
            $closestMatches = DB::table('restaurants')
                ->orderByRaw("
                    IF(location = '$location', 0, 1) +
                    ABS(rating - $rating) +
                    ABS(SUBSTRING_INDEX(price_range, '-', 1) - $price)
                ")
                ->take(5) // Adjust the number of closest matches as needed
                ->get();
        }
        // Pass the data to the view
        return view('results', [
            'restaurants' => $restaurants,
            'closestMatches' => $closestMatches,
            'priceRange' => $price,
        ]);
    }
}
