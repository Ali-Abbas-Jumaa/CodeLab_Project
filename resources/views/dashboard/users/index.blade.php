@extends('dashboard.layouts.master')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">


           <div class="card">
               <div class="card-header">
                   <div class="row justify-content-between">
                       <div class="col-auto">
                           <h3 class="m-0 text-white">
                               Users
                           </h3>

                       </div>
                   </div>
               </div>
               <div class="card-body">
                   <table class="table">
                       <thead>
                       <tr>
                           <th>#</th>
                           <th>Name</th>
                           <th>Email</th>
                           <th>Action</th>
                       </tr>
                       </thead>
                       <tbody>
                       @foreach($users as $user)
                           <tr>
                               <td>{{ $user->id }}</td>
                               <td>{{ $user->name }}</td>
                               <td>{{ $user->email }}</td>
                               <td>
                                   <div class="btn-group btn-group-sm">
                                       <a class="btn btn-info" href="/users/{{ $user->id }}/edit">edit</a>
                                       {{--<form action="/users/{{ $user->id }}" method="post">--}}
                                           {{--@csrf--}}
                                           {{--@method("delete")--}}
                                           {{--<button type="submit" class="btn btn-danger">--}}
                                               {{--delete--}}
                                           {{--</button>--}}

                                       {{--</form>--}}

                                   </div>
                               </td>
                           </tr>

                       @endforeach
                       </tbody>
                   </table>
               </div>
           </div>
        </div>
    </div>


@endsection
