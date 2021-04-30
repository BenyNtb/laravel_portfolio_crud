<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $service = Service::all();
        return view('admin.servicess.logo', compact('service'));
    }
    public function create()
    {
        return view('admin.servicess.formServices');
    }
    public function store(Request $request)
    {
        request()->validate([
            "title" =>["required"],
            "description" =>["required"],
            "icon" =>["required"],
        ]);
        $service = new Service();
        $service->title = $request->title;
        $service->description = $request->description;
        $service->icon = $request->icon;
        $service->save();

        return redirect()->route('services.index')->with('success', 'Your element has added successfully');
    }

    public function destroy(Service $id)
    {
        $id->delete();
        return redirect()->route('services.index')->with('warning', "An element has been deleted");
    }
    public function show(Service $id)
    {
        $service = $id;
        return view('admin.servicess.showServices', compact('service'));
    }
    public function edit(Service $id)
    {
        $service = $id;
        return view('admin.servicess.editServices', compact('service'));
    }
    public function update(Service $id, Request $request)
    {
        request()->validate([
            "title" =>["required"],
            "description" =>["required"],
            "icon" =>["required"],
        ]);
        $service = $id;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->icon = $request->icon;
        $service->save();
        return redirect()->route('services.index')->with('success', 'Your facts is up to date');
    }
}
