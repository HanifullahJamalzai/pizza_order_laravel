<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\pizza;

class PizzaController extends Controller
{
    public function index(){
        // $pizzas = pizza::all();
        // $pizzas = pizza::orderBy('name', 'desc')->get();
        // $pizzas = pizza::where('type', 'volcano')->get();
        $pizzas = pizza::latest()->get();

        return view('pizza.index', [
            'pizzas' => $pizzas
            ]);
    }

    public function show($id){
        $pizza = pizza::findOrfail($id);
        return view('pizza.show', ['pizza' => $pizza]);
    }

    public function create(){
        return view('pizza.create');
    }

    public function store(){
        $pizza = new pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->price = request('price');
        $pizza->toppings = request('toppings');

        // error_log(request('toppings'));
        $pizza->save();
        // return request('toppings');
        return redirect('/')->with('msg', 'Thanks for Ordering');
    }

    public function destroy($id){
        $pizza = pizza::findorfail($id);
        $pizza->delete();

        return redirect('/pizzas')->with('msg', 'Order Completed');

    }
}
