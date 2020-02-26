@extends('panel.layout')
@section('postCreate')
    <div class="card-header">
        <h3 class="card-title">{{trans('text.posts.createPost')}}</h3>
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
        <form action="{{route('post.store')}}" method="post">
            @csrf
            <div class="col-4 form-group offset-4">
                <input class="form-control form-control-lg text-center" type="text" name="title" placeholder="{{trans('text.posts.title')}}">
            </div>

            <div class="col-10 form-group offset-1">
                <textarea class="form-control mytextarea" name="summery">{{trans('text.posts.summery')}}</textarea>
            </div>

            <div class="col-10 form-group offset-1">
                <textarea class="form-control mytextarea" name="text">{{trans('text.posts.content')}}</textarea>
            </div>
            <div class="col-4 text-center offset-4 form-group">
                <div class="form-control">
                    <label for="postActive">{{trans('text.posts.active')}}</label>
                    <input class="" id="postActive" type="radio" name="isActive" value="1">
                </div>
                <div class="form-control">
                    <label for="postInActive">{{trans('text.posts.inActive')}}</label>
                    <input class="" id="postInActive" type="radio" name="isActive" value="0" checked>
                </div>
            <input class="btn btn-success" type="submit" value="{{trans('text.posts.create')}}">


        </form>


    </div>
@endsection
