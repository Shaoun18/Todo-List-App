@extends('master')

@section('title')
    DashBoard
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            DashBoard
                        </div>

                        <div class="card-body">
                            <h4 class="text-center">{{Session::get('message')}}</h4>
                            <form action="{{route('todo-new')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">Tittle</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="title">
                                        <span class="text-danger">{{$errors->has('title') ? $errors->first('title') : ''}}</span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description" class="form-control" cols="5" rows="5"></textarea>
                                        <span class="text-danger">{{$errors->has('description') ? $errors->first('description') : ''}}</span>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success" >Submit</button>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

