<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;
use App\Models\Category;
use App\Models\Location;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $assets = Asset::all()->sortByDesc('created_at')->take(10);
        $categories = Category::withCount('assets')->orderBy('assets_count', 'desc')->take(5)->get();
        $location = Location::all();
        $users = User::all();

        return view('dashboard',[
            'assets'=> $assets,
            'categories' => $categories,
            'location' => $location,
            'users' => $users,
        ]);
        
    }
}
