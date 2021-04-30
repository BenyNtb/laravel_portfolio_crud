<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $portfolios = Portfolio::all();
        return view('admin.portfolio.cards', compact('portfolios'));
    }
    public function create(){
        return view('admin.portfolio.formPortfolio');
    }

    public function store(Request $request){
        request()->validate([
            "title" => ["required"],
            "link" => ["required"],
            "filter"=> ["required"],
        ]);
        $portfolio = new Portfolio();
        $portfolio->title = $request->title;
        $portfolio->link = $request->link;
        $portfolio->filter = $request->filter;
        $portfolio->save();
        return redirect()->route('portfolios.index');
    }

    public function destroy(Portfolio $id){
        $id->delete();
        return redirect()->route('portfolio.index');
    }
    public function show(Portfolio $id){
        $portfolio = $id;
        return view('admin.portfolio.showPortfolio', compact('portfolio'));
    }
    public function edit(Portfolio $id){
        $portfolio = $id;
        return view('admin.portfolio.editPortfolio', compact('portfolio'));
    }
    public function update(Portfolio $id, Request $request){
        request()->validate([
            "title" => ["required"],
            "link" => ["required"],
            "filter"=> ["required"],
        ]);
        $portfolio = $id;
        $portfolio->title = $request->title;
        $portfolio->link = $request->link;
        $portfolio->filter = $request->filter;
        $portfolio->save();
        return redirect('/admin/cards' . $portfolio->id);
    }
}
