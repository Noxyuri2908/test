<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\Tag;
use Str;

class TagController extends Controller
{
    protected $tagModel;
    protected $detailModel;

    public function __construct(Tag $tagModel, Detail $detailModel)
    {
        $this->tagModel = $tagModel;
        $this->detailModel = $detailModel;
    }

    public function index()
    {
        $tags = $this->tagModel->all();

    	return view('Backend.Tags.tag_list',['tags' => $tags]);
    }

    public function add()
    {
        $details = $this->detailModel->orderBy('created_at', 'desc')->get();
        return view('Backend.Tags.add', ['details' => $details]);
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
        $inputs['slug'] = Str::slug($inputs['name']);
        $this->tagModel->create($inputs);

        return redirect()->route('tag-list');
    }

    public function getEdit($id)
    {
        $tag = $this->tagModel->find($id);
        $details = $this->detailModel->orderBy('created_at', 'desc')->get();

        return view('Backend.Tags.edit', ['tags'=>$tag, 'details'=>$details]);
    }

    public function postEdit(Request $request,$id)
    {
        $tag = $this->tagModel->find($id);
        Tag::where('id', $id)->update(
            [
            'name' => $request->name,
            'detail_id' => $request->detail_id
            ]
        );
        // $category->save();

        return redirect()->route('tag-list');
    }

    public function delete($id){
    	$tag = $this->tagModel->find($id);
        $tag->delete();

        return redirect()->route('tag-list')->with('success', 'completed!');
    }
}
