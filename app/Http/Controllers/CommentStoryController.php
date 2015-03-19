<?php namespace App\Http\Controllers;

use App\CommentPoem;
use App\CommentStory;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreateComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CommentStoryController extends Controller {

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateComment $request)
    {
        $comment = CommentStory::create([
            'story_id' => $request->input('post_id'),
            'comment_content' => $request->input('comment_content')
        ]);

        $comment->save();

        return Redirect::back();
    }

}
