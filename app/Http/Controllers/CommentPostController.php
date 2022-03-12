<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Post;
use App\Models\Comment;

class CommentPostController extends Controller
{

    //mostrar los comentarios de un post específico 
    public function show($id)
    {
        $post =Post::find($id);
        
        return view('commentPost.show')->with('post', $post);
    }

    public function create($id)
    {
        $post =Post::find($id);
        return view('commentPost.create')->with('post', $post);
    }
    
    public function store(Request $request)
    { 
        $comment = new Comment;
        $comment->body = $request->body;
        $comment->user()->associate($request->user());
        $post = Post::find($request->post_id);
        $post->comments()->save($comment);

        return back()->with('status', 'Comentario publicado exitosamente :)');

    }

    public function edit($id)
    {
        $comment=Comment::find($id);
        return view('commentPost.edit')->with('comment', $comment);
    }

    public function update(Request $request, $id)
    {
        $comment= Comment::find($id);
        $comment->body=$request->get('body');
        $comment->save();

        return redirect('/myComments');
    }

    public function destroy($id)
    {
        $comment= Comment::find($id);
        $comment->delete();

        return redirect('/comments');
    }
}
