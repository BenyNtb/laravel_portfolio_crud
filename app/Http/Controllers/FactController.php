<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use Illuminate\Http\Request;

class FactController extends Controller
{
    public function index(){
        $facts = Fact::all();
        return view('admin.facts.numbers', compact('facts'));
    }
    public function create(){
        return view ('admin.facts.formFacts');
    }
    public function store (Request $request){
        request()->validate([
            "description"=>["required"],
            "count"=>["required"],
            "icon" =>["required"],
        ]);

        $fact = new Fact();
        $fact->description = $request-> description;
        $fact->count = $request-> count;
        $fact->icon = $request-> icon;
        $fact->save();
        return redirect()->route('facts.index')->with('success', 'Your element has added successfully');
    }
    public function destroy(Fact $id){
        $id->delete();
        return redirect()->route('facts.index')->with('warning', "An element has been deleted");
    }
    public function show(Fact $id){
        $fact = $id;
        return view('admin.facts.showFacts', compact('fact'));
    }
    public function edit(Fact $id){
        $fact = $id;
        return view ('admin.facts.editFacts', compact('fact'));
    }
    public function update(Fact $id, Request $request){
        request()->validate([
            "description"=>["required"],
            "count"=>["required"],
            "icon" =>["required"],
        ]);

        $fact = $id;
        $fact->description = $request-> description;
        $fact->count = $request-> count;
        $fact->icon = $request-> icon;
        $fact->save();
        return redirect()->route('facts.index')->with('success', 'Your facts is up to date');
    }
}
