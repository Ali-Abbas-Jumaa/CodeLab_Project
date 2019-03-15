@extends('dashboard.layouts.master')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-5">

            @include('layouts.errors')
            <div class="card">
                <div class="card-body">
                    <form action="/groups/{{ $group->id }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">name</label>
                            <input value="{{ old("name",$group->name) }}" type="text" id="name" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input value="{{ old("price",$group->image) }}" type="text" id="image" name="image" class="form-control">
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
