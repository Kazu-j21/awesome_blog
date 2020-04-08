{{-- Dashboard --}}
@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
@endsection

@section('content')
    <div class="container" id="content">
        <div class="row mt-0" id="pic">
            <img src="img/car.jpg" alt="" class="col-4 ">
            <img src="img/car.jpg" alt="" class="col-4 ">
            <img src="img/car.jpg" alt="" class="col-4">
            {{-- <img src="img/car.jpg" alt="" class="col-1"> --}}
        </div>
        
        <div class="col-md-12">
            <div class="col-md-6 offset-3 mx-auto" id="text">
                <h1 class="page-title text-center my-5 text-secondary">Awesome Blog App</h1>
                <p>
                    <em>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium repellendus natus officia unde doloremque veniam assumenda ea autem reprehenderit tempore asperiores minima fugit, fugiat, dolore rem deleniti aut laboriosam tenetur?
                    </em>
                </p>
                <p>
                    <em>
                        Ullam quod impedit accusantium quas enim dignissimos mollitia ut, tenetur porro, aspernatur in laboriosam sit maxime omnis, culpa eius harum saepe voluptas!
                    </em>
                </p>
                <p>
                    <em>
                        Beatae neque fugiat, excepturi, ducimus, odio sapiente nobis illum dicta harum consequatur facilis minus illo odit. Fuga harum commodi blanditiis ullam saepe.
                    </em>
                </p>
            </div>
        </div>
    </div>
@endsection
