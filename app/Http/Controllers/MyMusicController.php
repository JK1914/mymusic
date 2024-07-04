<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

class MyMusicController extends Controller
{
    public function store(){  
        $data = request()->validate([
            'title'=>'string',
            'author'=>'string'      
        ]);
       
        Music::create($data);
        return redirect()->route('musiclist');
    }

    public function create(){
        return view('music.create');
    }

    public function index(){       
        
        $musics = Music::all();
        return view('music.index', compact('musics'));
    }

    public function show($id){
        $music = Music::find($id);        
        return view('music.show', compact('music'));
    }

    public function updatelist(){
        $musics = Music::all();
        return view('music.editlist', compact('musics'));
    }

    public function deletelist(){
        $musics = Music::all();
        return view('music.deletelist', compact('musics'));
    }

    public function update($id){
        $music = Music::find($id);       
        $data = request()->validate([
            'title'=>'string',
            'author'=>'string'      
        ]);
        $music->update($data);
        $musics = Music::all();
        return view('music.editlist', compact('musics'));
    }

    public function delete($id){
        $music = Music::find($id);        
        $music->delete();
        $musics = Music::all();
        return view('music.index', compact('musics'));
    }    
}
