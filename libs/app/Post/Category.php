<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $table = 'categories';

    protected $fillable =
        [
            'title',
            'content',
        ];

    public function store($request)
    {
        $this->title = $request->title;
        $this->content = $request->content;
        $save = $this->save();
        if ($save) {
            return true;
        } else
            return false;
    }

    public function edit($request, $post)
    {
        $post->title = $request->title;
        $post->content = $request->content;
        $update = $post->save();
        if ($update) {
            return true;
        } else
            return false;
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'category_post', 'post_id', 'category_id');
    }
}
