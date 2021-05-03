<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::all();
        return view('admin.about.presentation', compact('about'));
    }
    public function create()
    {
        return view('admin.about.formAbout');
    }
    public function store(Request $request)
    {
        request()->validate([
            "title" =>["required"],
            "description" =>["required"],
            "image" =>["required"],
            "subtitle" =>["required"],
            "subparagraph" =>["required"],
            "birthday" =>["required"],
            "website" =>["required"],
            "phone" =>["required"],
            "city" =>["required"],
            "age" =>["required"],
            "degree" =>["required"],
            "email" =>["required"],
            "freelance" =>["required"],
        ]);
        $presentation = new About();
        $presentation->title = $request->title;
        $presentation->description = $request->description;
        $presentation->image = $request->image;
        $presentation->subtitle = $request->subtitle;
        $presentation->subparagraph = $request->subparagraph;
        $presentation->birthday = $request->birthday;
        $presentation->website = $request->website;
        $presentation->phone = $request->phone;
        $presentation->city = $request->city;
        $presentation->age = $request->age;
        $presentation->degree = $request->degree;
        $presentation->email = $request->email;
        $presentation->freelance = $request->freelance;
        $presentation->save();

        return redirect()->route('abouts.index');
    }

    public function destroy(About $id)
    {
        $id->delete();
        return redirect()->back();
    }
    public function show(About $id)
    {
        $presentation = $id;
        return view('admin.about.showAbout', compact('presentation'));
    }
    public function edit(About $id)
    {
        $presentation = $id;
        return view('admin.about.editAbout', compact('presentation'));
    }
    public function update(About $id, Request $request)
    {
        request()->validate([
            "title" =>["required"],
            "description" =>["required"],
            "image" =>["required"],
            "subtitle" =>["required"],
            "subparagraph" =>["required"],
            "birthday" =>["required"],
            "website" =>["required"],
            "phone" =>["required"],
            "city" =>["required"],
            "age" =>["required"],
            "degree" =>["required"],
            "email" =>["required"],
            "freelance" =>["required"],
        ]);
        //INPUT FOR THE IMG
        if ($request->image !=null){
            Storage::disk('public')->delete('img/'. $id->image);
            $request->file('image')->storePublicly('img/', 'public');
            $presentation->image = $request->file('image')->hashName();
            $presentation->save();
        }
        $presentation = $id;
        $presentation->title = $request->title;
        $presentation->description = $request->description;
        $presentation->image = $request->image;
        $presentation->subtitle = $request->subtitle;
        $presentation->subparagraph = $request->subparagraph;
        $presentation->birthday = $request->birthday;
        $presentation->website = $request->website;
        $presentation->phone = $request->phone;
        $presentation->city = $request->city;
        $presentation->age = $request->age;
        $presentation->degree = $request->degree;
        $presentation->email = $request->email;
        $presentation->freelance = $request->freelance;
        $presentation->save();
        return redirect()->route('abouts.index');
    }
}
