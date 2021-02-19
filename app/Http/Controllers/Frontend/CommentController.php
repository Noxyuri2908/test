<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Str;
use App\Models\Detail;
use App\Models\Comment;

class CommentController extends Controller
{
    public function postComment($id, Request $request)
    {
        $detail = Detail::find($id);
        Comment::where('id', $id)->create(
            [
            'name' => $request->name,
            'slug' => $request->name,
            'description' => $request->message,
            'detail_id' => $id
            ]
        );
        
    }

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
