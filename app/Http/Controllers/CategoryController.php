<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Category::all();
        return view('categories.index', [
            'categories' =>$categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'name'=>'required|string|min:5',
            'description' =>'nullable',
        ]);

        Category::create([
            'name' =>$request->name,
            'description' =>$request->description,
        ]);

        return redirect()->route('categories.index')->with('succes', 'category create succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        //
        $categorie = Category::find($id);
        return view('categories.show',['categorie' =>$categorie]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        //

        $categorie = Category::find($id);

        return view('categories.edit', ['categorie' =>$categorie]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        //
 $request->validate([
            'name'=>'required|string|min:5',
            'description' =>'nullable',
        ]);

        Category::find($id)->update([
            'name' =>$request->name,
            'description' =>$request->description,
        ]);

        return redirect()->route('categories.index')->with('succes', 'category update succesfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        //

        Category::find($id)->delete();
             return redirect()->route('categories.index')->with('succes', 'category destroy succesfully');
    }
}
