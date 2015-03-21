<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoryController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $stories = Story::orderBy('created_at', 'desc')->paginate(5);


        return view('stories.index', ['stories' => $stories] );
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return Response
     */
    public function show($id)
    {
        $story = Story::find($id);
        $comments = $this->getCommentsForPoem($story->id);

        return view('stories.show', [
            'story' => $story,
            'comments' => $comments
        ]);
    }

    /**
     * Return comments for single story
     * @param $storyId
     * @return mixed
     */
    public function getCommentsForPoem($storyId)
    {
        $comments = DB::table('comment_stories')
            ->where('story_id', $storyId)
            ->join('users', 'comment_stories.user_id', '=', 'users.id')
            ->select(
                'comment_stories.comment_content',
                'users.first_name',
                'users.family_name',
                'comment_stories.created_at',
                'comment_stories.id')
            ->orderBy('created_at', 'desc')
            ->paginate(5);
        return $comments;
    }


}
