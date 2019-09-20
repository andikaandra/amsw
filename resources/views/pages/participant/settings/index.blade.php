@extends('layouts.participant')

@section('path', 'Settings')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">

            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <p>
                        {{\Session::get('success')}}
                    </p>
                </div>
            @endif

            <div class="card card-content">
                <div class="card-header">
                    <h5>
                        Account Settings
                    </h5>
                </div>
                <div class="card-body">
                    <form action="{{url('participant/settings')}}" method="post">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" id="" class="form-control" disabled value="{{$user->name}}">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" id="" class="form-control" disabled value="{{$user->email}}">
                            </div>
                            <div class="form-group">
                                <label for="">University/ Institute</label>
                                <input type="text" name="university" id="" class="form-control" disabled value="{{$user->university}}">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label> <br>
                                <small class="text-muted">Change your password</small>
                                <input type="password" name="password" id="" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
