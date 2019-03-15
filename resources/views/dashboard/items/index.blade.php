@extends('dashboard.layouts.master')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">


           <div class="card">
               <div class="card-header">
                   <div class="row justify-content-between">
                       <div class="col-auto">
                           <h3 class="m-0">
                               items
                           </h3>

                       </div>
                       <div class="col-auto">
                           <a class="btn btn-danger" href="items/create"> create </a>
                       </div>
                   </div>
               </div>
               <div class="card-body">
                   <table class="table">
                       <thead>
                       <tr>
                           <th>#</th>
                           <th>name</th>
                           <th>price</th>
                           <th>group</th>
                           <th>action</th>
                       </tr>
                       </thead>
                       <tbody>
                       @foreach($items as $item)
                           <tr>
                               <td>{{ $item->id }}</td>
                               <td>{{ $item->name }}</td>
                               <td>{{ $item->price }}</td>
                               <td>{{ $item->group->name }}</td>
                               <td>
                                   <div class="btn-group btn-group-sm">
                                       <a class="btn btn-info" href="/dashboard/items/{{ $item->id }}/edit">edit</a>
                                       <form action="/dashboard/items/{{ $item->id }}" method="post">
                                           @csrf
                                           @method("delete")
                                           <button type="submit" class="btn btn-danger">
                                               delete
                                           </button>

                                       </form>

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
