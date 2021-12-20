@extends('layouts.app')

@section('page-title', 'Comics')

@section('content')
<div class="single_comic">
    <div class="card_comics">
        <img src="{{ $comic['thumb'] }}" alt="Comics">
        <h3>{{ $comic['series'] }}</h3>
    </div>
</div>
@endsection