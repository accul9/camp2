@extends('layouts.app')

@section('content')
    <h1>Ingredients for {{ $recipe->title }}</h1>
    <ul>
        @foreach ($recipe->items as $item)
            <li>{{ $item->name }}: {{ $item->pivot->quantity }} {{ $item->pivot->used_unit }}</li>
        @endforeach
    </ul>
    <a href="{{ route('recipes.show', $recipe->recipe_id) }}">Back to Recipe</a>
@endsection
