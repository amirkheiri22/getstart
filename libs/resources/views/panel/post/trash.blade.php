@extends('panel.layout')
@section('postTrash')
    <div class="card-header">
        <h3 class="card-title">{{trans('text.posts.trash')}}</h3>
        <div>
            @widget('action_button',[
            'title'=>trans('text.posts.allPosts'),
            'link'=>route('post.index'),
            'class'=>'btn-warning btn',
            ])
        </div>
    </div>
    <br>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped amir">
            <thead>
            <tr>
                <th>{{trans('text.posts.id')}}</th>
                <th>{{trans('text.posts.title')}}</th>
                <th>{{trans('text.posts.summery')}}</th>
                <th>{{trans('text.posts.deleted_at')}}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>
                        <div>{{$post->title}}</div>
                        <div class="d-flex d-inline-block">
                            @widget('action_button',[
                            'title'=>trans('text.posts.restore'),
                            'link'=>route('post.restore',['id'=>$post->id]),
                            'class'=>'btn-success btn-sm',
                            ])
                            @widget('action_button',[
                            'title'=>trans('text.posts.forceDelete'),
                            'link'=>route('post.forceDelete',['id'=>$post->id]),
                            'class'=>'btn-danger btn-sm',
                            ])
                        </div>
                    </td>
                    <td>{!! $post->summery !!}</td>
                    <td>{!! $post->deleted_at !!}</td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>{{trans('text.posts.id')}}</th>
                <th>{{trans('text.posts.title')}}</th>
                <th>{{trans('text.posts.summery')}}</th>
                <th>{{trans('text.posts.deleted_at')}}</th>
            </tr>
            </tfoot>
        </table>
    </div>

    <!-- /.card-body -->


@endsection
