<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use SoftDeletes;

    protected $table = 'tags';

    protected $fillable =
        [
            'content',
        ];

    public function posts()
    {
        return $this->belongsToMany(Post::class,'post_tag','post_id','tag_id');
    }

}
