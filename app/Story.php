<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model {

    /**
     * @var array
     *
     */
	protected $fillable = [
        'story_title',
        'story_content'
    ];

}
