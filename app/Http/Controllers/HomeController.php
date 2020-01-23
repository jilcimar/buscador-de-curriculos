<?php

namespace App\Http\Controllers;

use App\Models\Curriculo;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $curriculos = Curriculo::paginate(5);
        return view('index', compact('curriculos'));
    }
}
