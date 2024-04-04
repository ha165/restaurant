<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Restaurant;
use App\Http\Requests\RestaurantRequest;

class AdminController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('admin.pages.users.users', compact('users'));
    }
    public function restaurant()
    {
        $categories = Category::all();
        return view('admin.restaurant', compact('categories'));
    }

    public function uploadrest(Request $request)
    {
        try {
            // Validate incoming request data
            $validatedData = $request->validate([
                'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'name' => 'required|string|max:255',
                'price_range' => 'required|string|max:255',
                'location' => 'required|string|max:255',
                'rating' => 'required|numeric|max:255',
                'description' => 'required|string|max:255', 
                'category_id' => 'required|exists:category,id', // Assuming categories table exists
            ]);
            
            // Handle file upload
            if ($request->hasFile('image_url')) {
                $photoPath = $request->file('image_url')->store('photos', 'public');
                $validatedData['image_url'] = $photoPath;
            }
    
            // Create the restaurant
            Restaurant::create($validatedData);
    
            return redirect()->back()->with('success', 'Restaurant uploaded successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to upload restaurant. Error: '.$e->getMessage());
        }

}
}