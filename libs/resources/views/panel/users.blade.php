@extends('panel.layout')
@section('users')
{{--    <div class="content-wrapper">--}}
{{--        <section class="content">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="card">--}}
                        <div class="card-header">
                            <h3 class="card-title">{{trans('text.users.usersTable')}}</h3>
                        </div>
                        <br>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped amir">
                                <thead>
                                <tr>
                                    <th>{{trans('text.users.id')}}</th>
                                    <th>{{trans('text.users.name')}}</th>
                                    <th>{{trans('text.users.email')}}</th>
                                    <th>{{trans('text.users.created_at')}}</th>
                                    <th>{{trans('text.users.updated_at')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->created_at}}</td>
                                        <td>{{$user->updated_at}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>{{trans('text.users.id')}}</th>
                                    <th>{{trans('text.users.name')}}</th>
                                    <th>{{trans('text.users.email')}}</th>
                                    <th>{{trans('text.users.created_at')}}</th>
                                    <th>{{trans('text.users.updated_at')}}</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>

                        <!-- /.card-body -->
{{--                    </div>--}}
{{--                    <!-- /.card -->--}}
{{--                </div>--}}
{{--                <!-- /.col -->--}}
{{--            </div>--}}
{{--            <!-- /.row -->--}}
{{--        </section>--}}
{{--    </div>--}}
@endsection
