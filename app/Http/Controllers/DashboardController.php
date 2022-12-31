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
        $assets = Asset::all();
        $categories = Category::all();
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
