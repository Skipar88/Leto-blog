<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentPoem extends Model {

    /**
     * @var array
     *
     */
    protected $fillable = [
        'poem_id',
        'user_id',
        'comment_content'
    ];

    /**
     * Return poem that comment belongs
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function poemComments(){
        return $this->belongsTo('App\Poem');
    }

    public function userComment(){
        return $this->belongsTo('App\User');
    }
}
