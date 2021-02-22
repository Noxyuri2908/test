<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Str;
use App\Models\Detail;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();

        return view('Backend.Comments.comments_list',['comments' => $comments]);
    }

    public function delete($id){
        $comment = Comment::find($id);
        $comment->delete();

        return redirect()->route('comments-list')->with('success', 'completed!');
    }
}
