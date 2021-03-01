<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Str;
use App\Models\Detail;
use App\Models\Comment;

class CommentController extends Controller
{
    protected $commentModel;

    public function __construct(Comment $commentModel)
    {
        $this->commentModel = $commentModel;
    }

    public function index()
    {
        $comments = $this->commentModel->all();

        return view('Backend.Comments.comments_list',['comments' => $comments]);
    }

    public function delete($id){
        $comment = $this->commentModel->find($id);
        $comment->delete();

        return redirect()->route('comments-list')->with('success', 'completed!');
    }
}
