@extends('layouts.layouts')
@section('content')

        <div class="flex-center position-ref full-height">
            <div class="content">
                <img src="/img/pizza-house.png" />
                <div class="title m-b-md">
                </div>
                <p>{{ session('msg') }}</p>
                <a href="/pizzas/create">Order Pizza</a>
            </div>
        </div>
@endsection
    </body>
</html>
