<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Poem extends Model {

    /**
     * @var array
     *
     */
    protected $fillable = [
        'poem_title',
        'poem_content'
    ];

    /**
     * Return comments for poem
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ownComments(){
        return $this->hasMany('App\CommentPoem');
    }
}
