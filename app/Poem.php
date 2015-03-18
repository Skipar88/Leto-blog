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

}
