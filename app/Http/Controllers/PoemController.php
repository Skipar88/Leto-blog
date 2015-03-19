<?php namespace App\Http\Controllers;

use App\CommentPoem;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Poem;
use Illuminate\Http\Request;

class PoemController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $poems = Poem::paginate(10);


        return view('poems.index', ['poems' => $poems] );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $poem = Poem::find($id);

        $comments = Poem::find($poem->id)->ownComments;

        return view('poems.show', [
            'poem' => $poem,
            'comments' => $comments
        ]);
    }


}