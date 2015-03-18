<?php namespace App\Http\Controllers;

use App\CommentPoem;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreateComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CommentPoemController extends Controller {

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateComment $request)
	{
		$commenr = CommentPoem::create($request->all());

        $commenr->save();

        return Redirect::back();
	}

}
