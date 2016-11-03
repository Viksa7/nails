<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class PortfolioController extends Controller
{
    public function index(Request $request) {
        $portfolios = Portfolio::all();
        return view('welcome', ['portfolios' => $portfolios]);
    }
}
