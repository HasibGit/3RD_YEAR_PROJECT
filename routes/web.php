<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Order;
use App\User;
use App\Rent;
use App\Mail\OrderProcess;

Route::get('/', 'PageController@index');

Auth::routes();

Route::get('/home', 'PageController@index');
Route::get('/admin', 'PageController@admin');
Route::get('/create', 'PageController@create');
Route::post('/create', 'PageController@store');
Route::get('/edit/{id}', function ($id) {
    return view('edit', ['id' => $id]);
});
Route::post('/edit/{id}', function ($id) {
    if (Auth::check()) {
        if (Auth::user()->admin == true) {
        } else {
            return view('auth.login');
        }
    } else {
        return view('auth.login');
    }
    $product = App\Product::where('id', $id)->first();
    $product->name = request('name');
    if (request('action') != NULL) {
        $product->action = 1;
    } else {
        $product->action = 0;
    }
    if (request('arcade') != NULL) {
        $product->arcade = 1;
    } else {
        $product->arcade = 0;
    }
    if (request('adventure') != NULL) {
        $product->adventure = 1;
    } else {
        $product->adventure = 0;
    }
    if (request('platformer') != NULL) {
        $product->platformer = 1;
    } else {
        $product->platformer = 0;
    }
    if (request('puzzle') != NULL) {
        $product->puzzle = 1;
    } else {
        $product->puzzle = 0;
    }
    if (request('rpg') != NULL) {
        $product->rpg = 1;
    } else {
        $product->rpg = 0;
    }
    if (request('racing') != NULL) {
        $product->racing = 1;
    } else {
        $product->racing = 0;
    }
    if (request('strategy') != NULL) {
        $product->strategy = 1;
    } else {
        $product->strategy = 0;
    }

    if (request('ps4') != NULL) {
        $product->ps4 = 1;
    } else {
        $product->ps4 = 0;
    }
    if (request('ps3') != NULL) {
        $product->ps3 = 1;
    } else {
        $product->ps3 = 0;
    }
    if (request('xbox_one') != NULL) {
        $product->xbox_one = 1;
    } else {
        $product->xbox_one = 0;
    }
    if (request('xbox_360') != NULL) {
        $product->xbox_360 = 1;
    } else {
        $product->xbox_360 = 0;
    }
    if (request('pc') != NULL) {
        $product->pc = 1;
    } else {
        $product->pc = 0;
    }
    if (request('nintendo_switch') != NULL) {
        $product->nintendo_switch = 1;
    } else {
        $product->nintendo_switch = 0;
    }
    $product->description = request('description');
    $product->path = request('path');
    $product->stock = request('stock');
    $product->rating = request('rating');
    $product->price = request('price');
    $product->save();
    return view('home');
});


Route::get('/delete/{id}', function ($id) {
    App\Product::where('id', $id)->delete();
    return view('home');
});

Route::get('/adminreview/{id}', function ($id) {
    if (Auth::check()) {
        if (Auth::user()->admin == true) {
        } else {
            return view('auth.login');
        }
    } else {
        return view('auth.login');
    }
    $product = App\Product::where('id', $id)->first();

    return view('/adminreview', ['product' => $product]);
});


Route::get('/userreview/{id}', function ($id) {
    if (Auth::check()) {
    } else {
        return view('auth.login');
    }
    $product = App\Product::where('id', $id)->first();
    return view('/userreview', ['product' => $product]);
});

Route::get('/ps4', function () {
    if (Auth::check()) {
    } else {
        return view('auth.login');
    }
    $products = App\Product::where('ps4', 1)->get();
    return view('/ps4', ['products' => $products]);
});
Route::get('/ps3', function () {
    if (Auth::check()) {
    } else {
        return view('auth.login');
    }
    $products = App\Product::where('ps3', 1)->get();
    return view('/ps3', ['products' => $products]);
});
Route::get('/xbox_one', function () {
    if (Auth::check()) {
    } else {
        return view('auth.login');
    }
    $products = App\Product::where('xbox_one', 1)->get();
    return view('/xbox_one', ['products' => $products]);
});
Route::get('/xbox_360', function () {
    if (Auth::check()) {
    } else {
        return view('auth.login');
    }
    $products = App\Product::where('xbox_360', 1)->get();
    return view('/xbox_360', ['products' => $products]);
});
Route::get('/pc', function () {
    if (Auth::check()) {
    } else {
        return view('auth.login');
    }
    $products = App\Product::where('pc', 1)->get();
    return view('/pc', ['products' => $products]);
});
Route::get('/nintendo_switch', function () {
    if (Auth::check()) {
    } else {
        return view('auth.login');
    }
    $products = App\Product::where('nintendo_switch', 1)->get();
    return view('/nintendo_switch', ['products' => $products]);
});
Route::get('/action', function () {
    if (Auth::check()) {
    } else {
        return view('auth.login');
    }
    $products = App\Product::where('action', 1)->get();
    return view('/action', ['products' => $products]);
});
Route::get('/arcade', function () {
    if (Auth::check()) {
    } else {
        return view('auth.login');
    }
    $products = App\Product::where('arcade', 1)->get();
    return view('/arcade', ['products' => $products]);
});
Route::get('/adventure', function () {
    if (Auth::check()) {
    } else {
        return view('auth.login');
    }
    $products = App\Product::where('adventure', 1)->get();
    return view('/adventure', ['products' => $products]);
});
Route::get('/platformer', function () {
    if (Auth::check()) {
    } else {
        return view('auth.login');
    }
    $products = App\Product::where('platformer', 1)->get();
    return view('/platformer', ['products' => $products]);
});
Route::get('/puzzle', function () {
    if (Auth::check()) {
    } else {
        return view('auth.login');
    }
    $products = App\Product::where('puzzle', 1)->get();
    return view('/puzzle', ['products' => $products]);
});
Route::get('/rpg', function () {
    if (Auth::check()) {
    } else {
        return view('auth.login');
    }
    $products = App\Product::where('rpg', 1)->get();
    return view('/rpg', ['products' => $products]);
});
Route::get('/racing', function () {
    if (Auth::check()) {
    } else {
        return view('auth.login');
    }
    $products = App\Product::where('racing', 1)->get();
    return view('/racing', ['products' => $products]);
});
Route::get('/strategy', function () {
    if (Auth::check()) {
    } else {
        return view('auth.login');
    }
    $products = App\Product::where('strategy', 1)->get();
    return view('/strategy', ['products' => $products]);
});
Route::get('/rating', function () {
    if (Auth::check()) {
    } else {
        return view('auth.login');
    }
    $products = DB::table('products')
        ->orderBy('rating', 'desc')  // You can pass as many columns as you required
        ->get();
    return view('/rating', ['products' => $products]);
});
Route::get('/price', function () {
    if (Auth::check()) {
    } else {
        return view('auth.login');
    }
    $products = DB::table('products')
        ->orderBy('price', 'asc')  // You can pass as many columns as you required
        ->get();
    return view('/price', ['products' => $products]);
});

Route::post('/search', function () {
    if (Auth::check()) {
    } else {
        return view('auth.login');
    }
    $name = request('search_item');
    $product = App\Product::where('name', $name)->first();
    return view('/search', ['product' => $product]);
});

Route::get('/confirm/{id}', function ($id) {
    if (Auth::check()) {
    } else {
        return view('auth.login');
    }
    $product = App\Product::where('id', $id)->first();
    return view('/confirm', ['product' => $product]);
});

Route::get('/submit/{product_id}', function ($product_id) {
    if (Auth::check()) {
    } else {
        return view('auth.login');
    }
    $user_id = Auth::user()->id;
    $newOrder = new Order;
    $newOrder->user_id = $user_id;
    $newOrder->product_id = $product_id;
    $newOrder->save();
    return view('/successful');
});

Route::get('/orders', function () {
    if (Auth::check()) {
        if (Auth::user()->admin == true) {
        } else {
            return view('auth.login');
        }
    } else {
        return view('auth.login');
    }
    $orders = App\Order::get();
    return view('orders', ['orders' => $orders]);
});



Route::get('/sendEmail/{userId}', function ($userId) {
    if (Auth::check()) {
        if (Auth::user()->admin == true) {
        } else {
            return view('auth.login');
        }
    } else {
        return view('auth.login');
    }
    $user = App\User::where('id', $userId)->first();
    \Mail::to($user)->send(new OrderProcess);
    return view('admin');
});

Route::get('/rentList/{orderId}/{userId}/{productId}', function ($orderId, $userId, $productId) {
    if (Auth::check()) {
        if (Auth::user()->admin == true) {
        } else {
            return view('auth.login');
        }
    } else {
        return view('auth.login');
    }
    App\Order::where('id', $orderId)->delete();
    $user = App\User::where('id', $userId)->first();
    $product = App\Product::where('id', $productId)->first();

    $newRent = new Rent;
    $newRent->customer_name = $user->name;
    $newRent->customer_email = $user->email;
    $newRent->product_name = $product->name;
    $newRent->product_price = $product->price;
    $newRent->cashback = $product->price - 1000;
    $currentTime = Carbon\Carbon::now();
    $newRent->expireDate = $currentTime->addDays(30);
    $newRent->save();
    return view('/successful2');
});

Route::get('/rents', function () {
    if (Auth::check()) {
        if (Auth::user()->admin == true) {
        } else {
            return view('auth.login');
        }
    } else {
        return view('auth.login');
    }
    $rents = App\Rent::get();
    return view('rentInfo', ['rents' => $rents]);
});

Route::get('/removeRent/{id}', function ($id) {
    if (Auth::check()) {
        if (Auth::user()->admin == true) {
        } else {
            return view('auth.login');
        }
    } else {
        return view('auth.login');
    }
    App\Rent::where('id', $id)->delete();
    return view('/successful3');
});
