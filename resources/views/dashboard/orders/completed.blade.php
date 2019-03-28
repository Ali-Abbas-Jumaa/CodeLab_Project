@extends('dashboard.layouts.master')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">


           <div class="card">
               <div class="card-header">
                   <div class="row justify-content-between">
                       <div class="col-auto">
                           <h3 class="m-0 text-white">
                               Completed Orders
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
                           <!-- <th>user Id</th>
                           <th>group</th> -->
                           <th>action</th>
                       </tr>
                       </thead>
                       <tbody>
                       @foreach($orders as $order)
                           <tr>
                               <td>{{ $order->id }}</td>
                               <!-- <td>{{ $order->name }}</td>
                               <td>{{ $order->price }}</td> -->
                               <td>
                                   <div class="btn-group btn-group-sm">
                                       <!-- <a class="btn btn-info" href="/dashboard/orders/{{ $order->id }}/change">uncompleted</a> -->
                                       <form action="/dashboard/orders/{{ $order->id }}/change" method="post">
                                           @csrf
                                           @method("put")
                                           <button type="submit" class="btn btn-info">
                                                uncompleted
                                           </button>

                                       </form>
                                       <form action="/dashboard/orders/{{ $order->id }}" method="post">
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
