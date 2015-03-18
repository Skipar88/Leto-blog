<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentStory extends Model {

    /**
     * @var array
     *
     */
    protected $fillable = [
        'story_id',
        'comment_content'
    ];

}
