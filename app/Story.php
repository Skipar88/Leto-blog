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

    /**
     * Return comments for story
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ownComments(){
        return $this->hasMany('App\CommentStory');
    }
}
