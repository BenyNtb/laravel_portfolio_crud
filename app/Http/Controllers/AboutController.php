<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

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
        return redirect('/admin/presentation/' . $presentation->id);
    }
}
