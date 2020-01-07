@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        @foreach ($products as $item)
    <div class="col-md-3">
       
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" style="max-height: 200px;max-width:200px" src="{{$item->path}}" alt="Card image cap">
            <div class="card-body">
            <a href="/userreview/{{$item->id}}"><h5 class="card-title">{{$item->name}}</h5></a>
            <p class="card-text">Price : {{$item->price}} Tk | Stock : {{$item->stock}}</p>
              <a href="/confirm/{{$item->id}}" class="btn btn-success">Order Product</a>
            </div>
        </div>
    </div>
    @endforeach
    </div>
</div>
@endsection
