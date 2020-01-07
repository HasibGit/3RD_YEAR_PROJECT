@extends('layouts.app')

@section('content')
   <div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Customer Id</th>
                <th>Product Id</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>
                        {{$order->user_id}}
                    </td>
                    <td>
                        {{$order->product_id}}
                    </td>
                    <td>
                        <a href="/sendEmail/{{$order->user_id}}" class="btn btn-info">Send Email</a>
                    <a href="/rentList/{{$order->id}}/{{$order->user_id}}/{{$order->product_id}}" class="btn btn-outline-dark">Send To Rent List</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
   </div>    
@endsection