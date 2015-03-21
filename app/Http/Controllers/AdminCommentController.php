<?php namespace App\Http\Controllers;

use App\CommentPoem;
use App\CommentStory;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminCommentController extends Controller {
    /**
     * Define middleware
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Delete poem comment
     * @param $id
     * @return mixed
     */
	public function deletePoemComment($id){
        $commentToDelete = CommentPoem::find($id);

        $commentToDelete->delete();

        return Redirect::back();
    }

    /**
     * Delete story comment
     * @param $id
     * @return mixed
     */
    public function deleteStoryComment($id){
        $commentToDelete = CommentStory::find($id);

        $commentToDelete->delete();

        return Redirect::back();
    }
    //deleteStoryComment
}
