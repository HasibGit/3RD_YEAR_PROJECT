<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['app.login', 'app.register', 'home']);
    }

    public function index()
    {
        $products = Product::get();
        return view('home', ['products' => $products]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function admin()
    {
        if (Auth::check()) {
            if (Auth::user()->admin == true) {
            } else {
                return view('auth.login');
            }
        } else {
            return view('auth.login');
        }
        $products = Product::get();
        return view('admin', ['products' => $products]);
    }
    public function create()
    {
        if (Auth::check()) {
            if (Auth::user()->admin == true) {
                return view('create');
            } else {
                return view('auth.login');
            }
        } else {
            return view('auth.login');
        }
    }

    public function store()
    {
        if (Auth::check()) {
            if (Auth::user()->admin == true) {
            } else {
                return view('auth.login');
            }
        } else {
            return view('auth.login');
        }
        $product = new Product;
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
        return view('create');
    }
}
