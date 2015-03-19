<?php namespace App\Http\Controllers;

use App\CommentPoem;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreateComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CommentPoemController extends Controller {

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateComment $request)
	{
		$comment = CommentPoem::create([
            'poem_id' => $request->input('post_id'),
            'user_id' => Auth::user()->id,
            'comment_content' => $request->input('comment_content')
        ]);

        $comment->save();

        return Redirect::back();
	}

}
