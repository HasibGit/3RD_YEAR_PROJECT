@extends('layouts.app')

@section('content')

<div class="container">
  <a class="btn btn-primary mb-4" href="/create">Add Product</a>
  <a class="btn btn-warning mb-4 ml-2" href="/orders">Order List</a>
  <a class="btn btn-secondary mb-4 ml-2" href="/rents">Rent List</a>
  <div class="row justify-content-left">
    @foreach ($products as $item)
  <div class="col-md-3">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top" style="max-height: 200px;max-width:200px" src="{{$item->path}}" alt="Card image cap">
          <div class="card-body">
          <a href="/adminreview/{{$item->id}}"><h5 class="card-title">{{$item->name}}</h5></a>
          <p class="card-text">Price : {{$item->price}} Tk | Stock : {{$item->stock}}</p>
            <a href="/edit/{{$item->id}}" class="btn btn-primary">Edit</a>
          <a href="/delete/{{$item->id}}" class="btn btn-danger">Delete</a>
          </div>
      </div>
    </div>
    @endforeach
    </div>
   
</div>

@endsection
