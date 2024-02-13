<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $departureDate = '2024-02-13';
        $trains = Train::whereDate('departure_time', '=', $departureDate)->get();
        return view('pages.index', compact('trains'));
    }
}
