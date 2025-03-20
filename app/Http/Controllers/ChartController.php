<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index()
    {
        // Fetch sales data grouped by category
        $sales = Sale::select('category', 'amount')
            ->get()
            ->groupBy('category')
            ->map(function ($group) {
                return $group->sum('amount'); // Sum amounts if multiple entries per category
            });

        $categories = $sales->keys()->toArray(); // e.g., ['Jan', 'Feb', 'Mar', 'Apr']
        $amounts = $sales->values()->toArray();  // e.g., [30, 40, 35, 50]

        return view('welcome', [
            'categories' => json_encode($categories),
            'amounts' => json_encode($amounts),
        ]);
    }

    public function data()
    {
        $sales = Sale::select('category', 'amount')
            ->get()
            ->groupBy('category')
            ->map(function ($group) {
                return $group->sum('amount');
            });

        return response()->json([
            'categories' => $sales->keys()->toArray(),
            'amounts' => $sales->values()->toArray(),
        ]);
    }
}
