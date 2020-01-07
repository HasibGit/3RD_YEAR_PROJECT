@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img style="max-height: 400px; max-width : 400px" src="{{URL::asset($product->path)}}" alt="">
        </div>
        <div class="col-md-6">
            <h5>{{$product->name}}</h5>
            <h5>Genre</h5>
            @if($product->action != NULL)
            <span>Action | </span>
            @endif
            @if($product->arcade != NULL)
            <span>Arcade | </span>
            @endif
            @if($product->adventure != NULL)
            <span>Adventure | </span>
            @endif
            @if($product->platformer != NULL)
            <span>Platformer | </span>
            @endif
            @if($product->puzzle != NULL)
            <span>Puzzle | </span>
            @endif
            @if($product->rpg != NULL)
            <span>RPG | </span>
            @endif
            @if($product->racing != NULL)
            <span>Racing | </span>
            @endif
            @if($product->strategy != NULL)
            <span>Strategy |</span>
            @endif
            <h5>Platform</h5>
            @if($product->ps4 != NULL)
            <span>PS4 | </span>
            @endif
            @if($product->ps3 != NULL)
            <span>PS3 | </span>
            @endif
            @if($product->xbox_one != NULL)
            <span>XBOX ONE | </span>
            @endif
            @if($product->xbox_360 != NULL)
            <span>XBOX 360 | </span>
            @endif
            @if($product->pc != NULL)
            <span>PC | </span>
            @endif
            @if($product->nintendo_switch != NULL)
            <span>Nintendo Switch | </span>
            @endif
            <h5>Description</h5>
            <p>{{$product->description}}</p>
            <h5>Rating</h5>
            <p>{{$product->rating}}</p>
            <h5>Stock</h5>
            <p>{{$product->stock}}</p>
            <h5>Price</h5>
            <p>{{$product->price}}</p>
            <a href="/confirm/{{$product->id}}" class="btn btn-success">Order Product</a>
        </div>
    </div>
    </div>
@endsection