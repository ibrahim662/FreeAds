<?php

namespace App\Http\Controllers;

use App\Models\Annonce;

use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annonces = Annonce::get()->all();
        return view('AnCrud/annonce', compact('annonces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AnCrud/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'title'=>'required',
            'description'=>'required',
            'picture1'=>'required',
            'picture2'=>'nullable',
            'picture3'=>'nullable',
            'price'=>'required',
            'create_by'=>'required'
        ]);
        $annonces = Annonce::create($attributes);
        return redirect()->route('annonces');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $annonces = Annonce::findOrFail($id);
        return view ('AnCrud/edit', compact('annonces'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $attributes = request()->validate([
            'title'=>'required',
            'description'=>'required',
            'picture1'=>'required',
            'picture2'=>'nullable',
            'picture3'=>'nullable',
            'price'=>'required',
        ]);
        $annonces = Annonce::findOrFail($id);
        $annonces->update($attributes);
        return redirect()->route('annonces');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $annonces = Annonce::findOrFail($id);
        $annonces->delete();
        return redirect()->route('annonces');
    }

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $annonces = Annonce::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->orWhere('price', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('AnCrud/search', compact('annonces'));
    }
}