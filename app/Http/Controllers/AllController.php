<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Fact;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function index(){
        $presentation = About::all();
        $numbers = Fact::all();
        $skills = Skill::all();
        $portfolio = Portfolio::all();
        $service = Service::all();
        return view('home', compact('presentation', 'numbers', 'skills', 'portfolio', 'service'));
}
}