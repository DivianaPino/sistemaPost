<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;


class CommentController extends Controller
{
    public function index()
    {
        $comment=Comment::all();
        return view('comment.index')->with('comments', $comment);
    }

}
