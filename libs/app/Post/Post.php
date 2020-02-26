<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class Post extends Model
{
    use SoftDeletes;

    protected $table = 'posts';

    protected $fillable = [
        'title',
        'user_id',
        'summery',
        'text',
        'isActive',
    ];

    public function store(Request $request)
    {
        $this->title = $request->title;
        $this->user_id = auth()->user()->id;
        $this->summery = $request->summery;
        $this->text = $request->text;
        $this->isActive = $request->isActive;
        $this->save();
        if ($this->save())
            return true;
        else
            return false;
    }

    public function edit(Request $request, $post)
    {
        $post->title = $request->title;
        $post->user_id = auth()->user()->id;
        $post->summery = $request->summery;
        $post->text = $request->text;
        $post->isActive = $request->isActive;
        $post->save();
        if ($post->save())
            return true;
        else
            return false;
    }

    public function active()
    {
        $this->isActive=true;
        $this->save();
    }
    public function inActive()
    {
        $this->isActive=false;
        $this->save();
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag', 'post_id', 'tag_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_post', 'post_id', 'category_id');
    }
}
