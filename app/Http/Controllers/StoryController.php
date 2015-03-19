<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Story;
use Illuminate\Http\Request;

class StoryController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $stories = Story::paginate(10);


        return view('stories.index', ['stories' => $stories] );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $story = Story::find($id);

        $comments = Story::find($story->id)->ownComments;

        return view('stories.show', [
            'story' => $story,
            'comments' => $comments
        ]);
    }


}
