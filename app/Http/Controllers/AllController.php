<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Fact;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function index(){
        $presentation = About::all();
        $numbers = Fact::all();
        // $skills = Skill::all();
        // $projets = Projet::all();
        // $contact = Contact::all();
        return view('home', compact('presentation', 'numbers'));
}
}