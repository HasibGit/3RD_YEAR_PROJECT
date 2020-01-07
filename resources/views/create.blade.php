@extends('layouts.app')


@section('content')

<div class="container">
    <h3>Add Product Form</h3>
    <form method="post" action="/create" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="product_name">Product Name</label>
          <input type="text" name="name" class="form-control" id="name" placeholder="Enter product name">
        </div>

        <!-- For Genre -->
        <div class=form-group>
            <label for="genre">Select Genre</label>
    
            <div class="form-check">
                <input type="checkbox" name="action" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Action</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="arcade" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Arcade</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="adventure" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Adventure</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="platformer" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Platformer</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="puzzle" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Puzzle</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="rpg" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">RPG</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="racing" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Racing</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="strategy" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Strategy</label>
            </div>
            
        </div>
        <!-- For Platform -->

        <div class=form-group>
            <label for="genre">Select Platform</label>
    
            <div class="form-check">
                <input type="checkbox" name="ps4" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">PS4</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="ps3" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">PS3</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="xbox_one" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Xbox One</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="xbox_360" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Xbox 360</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="pc" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">PC</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="nintendo_switch" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Nintendo Switch</label>
            </div>
            
        </div>

        <div class="form-group">
            <label for="description">Enter Description</label>
            <input id="my-input" name="description" class="form-control" type="text" name="">
        </div>
        <div class="form-group">
            <label for="imagePath">Enter Image Path</label>
            <input id="my-input" name="path" class="form-control" type="text">
        </div>
        <div class="form-group">
            <label for="stock">Enter Amount</label>
            <input id="my-input" class="form-control" type="text" name="stock">
        </div>
        <div class="form-group">
            <label for="my-input">Enter Rating</label>
            <input id="my-input" class="form-control" type="text" name="rating">
        </div>
        <div class="form-group">
            <label for="my-input">Enter Price</label>
            <input id="my-input" class="form-control" type="text" name="price">
        </div>
        <input type="submit" class="btn btn-info">
      </form>
</div>

@endsection