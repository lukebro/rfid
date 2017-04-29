<?php

namespace App\Http\Controllers;

use App\Capture;
use App\Http\Controllers\Controller;
use App\Statistics;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $card = Auth::user()->card;

        $captures = Capture::where('card', $card)->latest()->get();

        return view('dashboard', [
            'captures' => $captures
        ]);
    }

    public function statistics()
    {
        $stats = new Statistics;
        return view('statistics', [
            'stats' => $stats,
        ]);
    }

    public function captures()
    {
        return view('captures', [
            'captures' => Capture::latest()->get(),
        ]);
    }

    public function capture($card)
    {
        $captures = Capture::where('card', '540:'.$card)->latest()->get();

        if ($captures->isEmpty()) {
            return redirect()->route('captures');
        }

        return view('capture', [
            'captures' => $captures,
            'card' => $card
        ]);
    }




}
