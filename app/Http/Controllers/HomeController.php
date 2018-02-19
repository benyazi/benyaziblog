<?php

namespace App\Http\Controllers;

use App\Models\CareerItem;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careerList = CareerItem::query()
            ->orderBy('start_work', 'desc')
            ->get();
        return view('home', [
            'careerList' => $careerList
        ]);
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function career()
    {
        $careerList = CareerItem::query()
            ->orderBy('start_work', 'desc')
            ->get();
        return view('career', [
            'careerList' => $careerList
        ]);
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function projects()
    {
        return view('projects');
    }
}
