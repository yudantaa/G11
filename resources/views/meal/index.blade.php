@extends('layout.main')
@section('component_content')
@foreach($meals as $meal)

<div class="card w-96 bg-base-100 shadow-xl mb-10">
    <figure><img src="{{ asset( 'storage/' . $meal->path) }}" alt="Meal-image" /></figure>
    <div class="card-body">
        <h2 class="card-title">{{$meal->name }}</h2>
        <p>{{ $meal->ingredient }}</p>
        <div class="card-actions justify-end">
            <button class="btn btn-primary">Order Now</button>
        </div>
    </div>
</div>

    <div class="columns-12 bg-slate-100 w-full h-fit">
        <div class="columns-4 w-96 bg-base-100 shadow-xl">
            <figure><img src="{{ asset( 'storage/' . $meal->path) }}" alt="Meal-image"></figure>
            <div class="card-meal">
                <h2></h2>
            </div>            
        </div>
    </div>
@endforeach
@endsection