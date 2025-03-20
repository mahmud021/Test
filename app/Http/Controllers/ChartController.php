<?php

namespace App\Http\Controllers;

use App\Models\CovidCase; // Renamed from Sale to more appropriate model
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index()
    {
        // Get COVID cases data grouped by state
        $casesData = CovidCase::select('state', 'cases')
            ->get()
            ->groupBy('state')
            ->map(function ($group) {
                return $group->sum('cases');
            });

        // Convert to arrays for charting
        $categories = $casesData->keys()->toArray();
        $amounts = $casesData->values()->toArray();

        return view('dashboard', compact('categories', 'amounts'));
    }

    public function data()
    {
        // Get fresh data from database
        $casesData = CovidCase::select('state', 'cases')
            ->get()
            ->groupBy('state')
            ->map(function ($group) {
                return $group->sum('cases');
            });

        return response()->json([
            'categories' => $casesData->keys()->toArray(),
            'amounts' => $casesData->values()->toArray(),
        ]);
    }
}
