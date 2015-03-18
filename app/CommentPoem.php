<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentPoem extends Model {

    /**
     * @var array
     *
     */
    protected $fillable = [
        'poem_id',
        'comment_content'
    ];

}
