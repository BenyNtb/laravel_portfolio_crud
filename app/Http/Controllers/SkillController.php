<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(){
        $skills = Skill::all();
        return view('admin.skills.competence', compact('skills'));
    }
    public function create(){
        return view('admin.skills.formSkills');
    }

    public function store(Request $request){
        request()->validate([
            "title" => ["required"],
            "value" => ["required"],
        ]);
        $skill = new Skill();
        $skill->title = $request->title;
        $skill->value = $request->value;
        $skill->save();
        return redirect()->route('skills.index');
    }

    public function destroy(Skill $id){
        $id->delete();
        return redirect()->route('skills.index');
    }
    public function show(Skill $id){
        $skill = $id;
        return view('admin.skills.showSkills', compact('skill'));
    }
    public function edit(Skill $id){
        $skill = $id;
        return view('admin.skills.editSkills', compact('skill'));
    }
    public function update(Skill $id, Request $request){
        request()->validate([
            "title" => ["required"],
            "value" => ["required"],
        ]);
        $skill = $id;
        $skill->title = $request->title;
        $skill->value = $request->value;
        $skill->save();
        return redirect()->route('skills.index', $skill->id)->with('success', "Your modification has been added");
    }
}
