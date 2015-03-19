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

    /**
     * Return story that comment belongs
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function storyComments(){
        return $this->belongsTo('App\Story');
    }
}
