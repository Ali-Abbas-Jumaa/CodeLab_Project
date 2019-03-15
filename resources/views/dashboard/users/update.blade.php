@extends('dashboard.layouts.master')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-5">

            @include('layouts.errors')
            <div class="card">
                <div class="card-body">
                    <form action="/users/{{ $user->id }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">name</label>
                            <input value="{{ old("name",$user->name) }}" type="text" id="name" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input value="{{ old("email",$user->email) }}" type="email" id="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input value="{{ old("password",$user->password) }}" type="password" id="password" name="password" class="form-control">
                        </div>

                        <div class="row">
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary"> Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
