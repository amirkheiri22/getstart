@extends('panel.layout')
@section('categoryIndex')
    <div class="card-header">
        <h3 class="card-title">{{trans('text.category.allCategories')}}</h3>
    </div>
    <div class="card-body">
        @widget('action_button',[
        'title'=>trans('text.category.createNewCategory'),
        'link'=>route('category.create'),
        'class'=>'btn-success btn-lg',
        ])
        <br>
        <br>
        <br>
        <table id="example1" class="table table-bordered table-striped amir">
            <thead>
            <tr>
                <th>{{trans('text.category.row')}}</th>
                <th>{{trans('text.category.title')}}</th>
                <th>{{trans('text.category.')}}</th>
                <th>{{trans('text.category.isActive')}}</th>
            </tr>
            </thead>
            <tbody>
            @php
                $counter = 1;
            @endphp
            @foreach($posts as $post)
                <tr>
                    <td>{{$counter++}}</td>
                    <td>
                        <div class="tsize">{{$post->title}}</div>
                        <div>
                            @widget('action_button',[
                            'title'=>trans('text.posts.show'),
                            'link'=>route('post.show',['id'=>$post->id]),
                            'class'=>'btn-outline-success btn-sm',
                            ])
                            @widget('action_button',[
                            'title'=>trans('text.posts.edit'),
                            'link'=>route('post.edit',['id'=>$post->id]),
                            'class'=>'btn-outline-primary btn-sm',
                            ])
                            @widget('action_button',[
                            'title'=>trans('text.posts.destroy'),
                            'link'=>route('post.destroy',['id'=>$post->id]),
                            'class'=>'btn-outline-danger btn-sm',
                            ])
                        </div>
                    </td>
                    <td>{!! $post->summery !!}</td>

                    <td>
                        <div class="">
                            @if($post->isActive)
                                <p>{{trans('text.posts.active')}}</p>
                                @widget('action_button',[
                                'title'=>trans('text.posts.inActive'),
                                'link'=>route('post.inActive',['id'=>$post->id]),
                                'class'=>'btn-outline-danger btn-sm',
                                ])
                            @else
                                <p>{{trans('text.posts.inActive')}}</p>
                                @widget('action_button',[
                                'title'=>trans('text.posts.active'),
                                'link'=>route('post.active',['id'=>$post->id]),
                                'class'=>'btn-outline-success btn-sm',
                                ])
                            @endif
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>{{trans('text.posts.row')}}</th>
                <th>{{trans('text.posts.title')}}</th>
                <th>{{trans('text.posts.summery')}}</th>
                <th>{{trans('text.posts.isActive')}}</th>
            </tr>
            </tfoot>
        </table>
    </div>
@endsection
