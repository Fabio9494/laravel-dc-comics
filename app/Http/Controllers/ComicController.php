<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics=Comic::all();
        return view('appComic.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('appComic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $request->all();

        $new_comic=new Comic();

        $new_comic->title=$form_data['title'];
        $new_comic->description=$form_data['description'];
        $new_comic->thumb=$form_data['thumb'];
        $new_comic->price=$form_data['price'];
        $new_comic->series=$form_data['series'];
        $new_comic->sale_date=$form_data['sale_date'];
        $new_comic->type=$form_data['type'];
        $new_comic->artists=$form_data['artists'];
        $new_comic->writers=$form_data['writers'];

        $new_comic->save();

        return redirect()->route('comic.show',['comic'=>$new_comic]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        return view('appComic.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    
    public function edit(Comic $comic)
    {
        return view('appComic.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $form_data = $request->all();
        
        
        

        $comic->title=$form_data['title'];
        $comic->description=$form_data['description'];
        $comic->thumb=$form_data['thumb'];
        $comic->price=$form_data['price'];
        $comic->series=$form_data['series'];
        $comic->sale_date=$form_data['sale_date'];
        $comic->type=$form_data['type'];
        $comic->artists=$form_data['artists'];
        $comic->writers=$form_data['writers'];

        $comic->update();

        return redirect()->route('comic.show',['comic'=>$comic]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
