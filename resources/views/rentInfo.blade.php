@extends('layouts.app')

@section('content')
   <div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Customer Name</th>
                <th>Customer Email</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>CashBack</th>
                <th>ExpireDate</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rents as $rent)
                <tr>
                    <td>
                        {{$rent->customer_name}}
                    </td>
                    <td>
                        {{$rent->customer_email}}
                    </td>
                    <td>
                        {{$rent->product_name}}
                    </td>
                    <td>
                        {{$rent->product_price}} tk
                    </td>
                    <td>
                        {{$rent->cashback}} tk
                    </td>
                    <td>
                        {{$rent->expireDate}}
                    </td>
                    <td>
                        <a href="/removeRent/{{$rent->id}}" class="btn btn-danger">Remove</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
   </div>    
@endsection