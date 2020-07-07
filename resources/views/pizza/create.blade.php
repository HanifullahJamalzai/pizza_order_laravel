@extends('layouts.layouts')
@section('content')
<div class="wrapper create-pizza">
    <h2>Create a New Pizza</h2>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose pizza type: </label>
        <select name="type" id="type">
            <option value="margherita">Margherita</option>
            <option value="hawaiin">Hawaiin</option>
            <option value="hawaiin">Hawaiin</option>
            <option value="veg supreme">Veg supreme</option>
            <option value="volcano">Volcano</option>
        </select>
        <label for="name">Price:</label>
        <input type="text" id="price" name="price">
        <label for="type">Choose base type: </label>
        <select name="base" id="base">
            <option value="cheesy crust">Cheesy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin & crispy">Thin & Crispy</option>
            <option value="thick">Thick</option>
        </select>
        <fieldset>
            <label>Extra toppings:</label><br />
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br />
            <input type="checkbox" name="toppings[]" value="pepper">Pepper<br />
            <input type="checkbox" name="toppings[]" value="garlic">Garlic<br />
            <input type="checkbox" name="toppings[]" value="olives">Olives<br />
        </fieldset>
        <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection
