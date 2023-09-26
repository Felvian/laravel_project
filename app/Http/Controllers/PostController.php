<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class PostController extends Controller
{
    public function index(){
        $posts=Posts::all();
        return view('post.index',compact('posts'));
    }

    public function created(){
        return view('post.create');
    }

    public function  store(){
        $data = request()->validate([
            'title' => 'string',
            'content'=>'string',
            'image'=>'string'
        ]);
        Posts::create($data);
        return redirect()->route('post.index');
    }

    public function show(Posts $post){
        return view('post.show', compact('post'));
    }

    public function edit(Posts $post){
        return view('post.edit', compact('post'));
    }
    public function update(Posts $post){
        $data = request()->validate([
            'title' => 'string',
            'content'=>'string',
            'image'=>'string'
        ]);
        $post->update($data);
        return redirect()->route('post.show',$post->id);
    }
    public function destroy(Posts $post){
        $post->delete();
        return redirect()->route('post.index');
    }
}
