<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DataController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        $captures = DB::select('select * from captures');

        return view('data', ['captures' => $captures]);
    }
}