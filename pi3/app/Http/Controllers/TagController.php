<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
   /**
 * Display  listing of the resource.
 * 
 * @return \Illuminate\Http\Response
 */
public function index()
    {
    return view('tag.index')->with('tags', Tag::all());
    }

public function create()
    {
    return view('tag.create');
    }

public function store(Request $request)
    {
    Tag::create($request->all());
    session()->flash('success', 'Tag foi cadastrada com sucesso');
    return redirect(route('tag.index'));
    }


public function show(Tag $tag)
    {
    return view('tag.show')->with('tag', $tag);
    }

public function edit(Tag $tag)
    {
    return view('tag.edit')->with('tag', $tag);
    }

public function update(Request $request, Tag $tag)
    {
    $tag->update($request->all());
    session()->flash('success','Tag foi alterada com sucesso');
    return redirect(route('tag.index'));
    }


public function destroy(Tag $tag)
    {
    if($tag->products()->count() > 0){
    session()->flash('success','Você não pode deletar a tag que tenha produto';
    return redirect(route('tag.index'));
    }

    $tag->delete();
    session()->flash('success', 'Tag foi apagada com sucesso!');
    return redirect(route('tag.index'));
    }
}
