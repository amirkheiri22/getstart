@extends('panel.layout')
@section('postShow')
    <div class="card-header">
        <h3 class="card-title">{!! $post->title !!}</h3>
        <div>
            @widget('action_button',[
            'title'=>trans('text.posts.allPosts'),
            'link'=>route('post.index'),
            'class'=>'btn-warning btn-sm',
            ])
            @widget('action_button',[
            'title'=>trans('text.posts.edit'),
            'link'=>route('post.edit',['id'=>$post->id]),
            'class'=>'btn-primary btn-sm',
            ])
            @widget('action_button',[
            'title'=>trans('text.posts.destroy'),
            'link'=>route('post.destroy',['id'=>$post->id]),
            'class'=>'btn-danger btn-sm',
            ])
        </div>
        <div class="card-tools">
            <button type="button" class="btn btn-tool btn-sm" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-tool btn-sm" data-widget="remove" data-toggle="tooltip"
                    title="Remove">
                <i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="card-body pad">
        <div class="col-10 offset-1 text-center">{!! $post->text !!}</div>
    </div>
@endsection
