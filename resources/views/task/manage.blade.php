@extends('master')

@section('title')
    ManageTodoPage
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Manage Todo Info
                        </div>
                        <div class="card-body">
                            <h4 class="text-center">{{Session::get('message')}}</h4>
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Tittle</th>
                                    <th>Description</th>
{{--                                    <th>Created Time</th>--}}
{{--                                    <th>Updated Time</th>--}}
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($todos as $todo)
                                    <tr>
                                        <td>{{$todo->title}}</td>
                                        <td>{{$todo->description}}</td>
{{--                                        <td>{{$todo->created_at}}</td>--}}
{{--                                        <td>{{$todo->updated_at}}</td>--}}
                                        <td>
                                            @if($todo -> completed == 1)
                                                <a class="btn btn-sm btn-success">Completed</a>
                                            @else
                                                <a class="btn btn-sm btn-success" style="background-color: red" >InComplete</a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('todo.edit', ['id' => $todo->id])}}" class="btn btn-success btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{route('todo.delete', ['id' => $todo->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this?')">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection


