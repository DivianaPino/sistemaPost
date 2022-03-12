<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class MycommentController extends Controller
{
        
    public function index()
    {
        $comment=Comment::where('user_id', auth()->user()->id)->get();
        return view('commentPost.my_comments')->with('comments', $comment);
    }


    public function create()
    {
        return view('commentPost.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $post=new Post();
        // $post->user_id=auth()->id();
        // $post->titulo=$request->get('titulo');
        // $post->contenido=$request->get('contenido');
        // $post->save();

        // return redirect('/myPosts');

        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment=Comment::find($id);
        return view('commentPost.edit')->with('comment', $comment);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comment= Comment::find($id);
        $comment->body= $request->get('body');
        $comment->save();

        return redirect('/myComments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment= Comment::find($id);
        $comment->delete();
        return redirect('/myComments');

    }
}
