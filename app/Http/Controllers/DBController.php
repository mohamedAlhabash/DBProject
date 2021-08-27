<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DBController extends Controller
{
    public function index(){
        $posts=Post::orderBy('id','desc')->paginate(10);
        return view('DBViews.index', compact('posts'));
    }
    public function delete($id){
        Post::find($id)->delete();
        return redirect()->back()->with('success','Posts deleted Successfully')->with('type','danger');;
    }
    public function add(){
        return view('DBViews.create');
    }
    public function store(Request $request){
        $request->except('_token');
    $request->validate([
        'title'=>'required|min:5|max:200'
        ,
        'body'=>'required'
    ]);
    Post::create([
        'title' => $request->title,
        'body' => $request->body
    ]);
    return redirect('/posts')->with('success','Posts Added Successfully')->with('type','success');;
    }
    public function edit($id){
       $posts= Post::find($id);
        return view('DBViews.edit',compact('posts'));
    }
    public function update(Request $request , $id){
        $request->validate([
            'title'=>'required|min:5|max:200'
            ,
            'body'=>'required'
        ]);
        Post::find($id)->update([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return redirect('/posts')->with('success','Posts Updated Successfully')->with('type','warning');
    }
}
