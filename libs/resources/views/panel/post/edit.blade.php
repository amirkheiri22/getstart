@extends('panel.layout')
@section('postEdit')
    <div class="card-header">
        <h3 class="card-title">{{trans('text.posts.editPost')}}</h3>
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
        <form action="{{route('post.update')}}" method="post">
            @csrf
            <input class="form-control" type="hidden" name="postId" value="{{$post->id}}">
            <input class="form-control" type="hidden" name="isActive" value="{{$post->isActive}}">

            <div class="col-4 form-group offset-4">
                <input class="form-control form-control-lg text-center" type="text" name="title"
                       placeholder="{{trans('text.posts.title')}}" value="{{$post->title}}">
            </div>

            <div class="col-10 form-group offset-1">
                <textarea class="form-control mytextarea" name="summery">{!! $post->summery !!}</textarea>
            </div>

            <div class="col-10 form-group offset-1">
                <textarea class="form-control mytextarea" name="text">{!! $post->text !!}</textarea>
            </div>

            <div class="col-4 text-center offset-4 form-group">
                <div class="form-control">
                    <label for="postActive">{{trans('text.posts.active')}}</label>
                    <input class="" id="postActive" type="radio" name="isActive" value="1"
                           @if($post->isActive)checked @endif>
                </div>
                <div class="form-control">
                    <label for="postInActive">{{trans('text.posts.inActive')}}</label>
                    <input class="" id="postInActive" type="radio" name="isActive" value="0"
                           @if(!$post->isActive)checked @endif>
                </div>
            </div>
            <input class="btn btn-success" type="submit" value="{{trans('text.posts.edit')}}">
        </form>
    </div>
@endsection
