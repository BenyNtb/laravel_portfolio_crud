<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function index(){
        $presentation = About::all();
        // $skills = Skill::all();
        // $projets = Projet::all();
        // $contact = Contact::all();
        return view('home', compact('presentation'));
}
}