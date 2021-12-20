@extends('layouts.app')

@section('page-title', 'Comics')


@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/single_comic.css') }}">
@endsection

@section('content')
<div class="spec_comic ">
    <div class="brand_line">

    </div>
    <div class="container">
        <div class="card_comic">
            <img src="{{ $comic['thumb'] }}" alt="Comics">
        </div>

        <div class="comic-info mt-5 mb-4">
            <h2 class="darker-brand"> {{ $comic['title'] }} </h2>
        </div>

        <div class="row mb-3">
            <div class="col-8">
                <div class="price_avaiabile justify-content-between d-flex pt-3 px-3">
                    <div class="price-box justify-content-between d-flex">
                        <div class="price">
                            <p class="text-white">U.S. Price: <strong>{{ $comic['price'] }}</strong> </p>
                        </div>
                        <div class="available">
                            <p class="text-white">AVAILABLE</p>
                        </div>
                    </div>
                    <div class="check ps-3">
                        <p class="text-white">Check Available ▽ </p>
                    </div>
                </div>

                <div class="description pt-3">
                    <p>
                        {{ $comic['description'] }}
                    </p>
                </div>

            </div>
            <div class="col-4 text-end">
                <h3 class="text-uppercase opacity-50 "> ADVERTISING </h3>
                <img src="{{ asset('img/adv.jpg') }}" alt="">
            </div>
        </div>
    </div>

    <div class="bg-brand-secondary">
        <div class="container pb-5">
            <div class="row pt-3">
                <div class="col-6  ">
                    <h3 class="darker-brand">Talent</h3>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <p class="darker-brand">Art by :</p>
                        </div>
                        <div class="col-8">
                            @foreach($comic['artists'] as $artist)
                            <span class="brand-color fw-bold"> {{$artist}} </span>
                            @if(!$loop -> last)
                            <span>,</span>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-3">
                        <div class="col-4">
                            <p class="darker-brand"> Written by :</p>
                        </div>
                        <div class="col-8 ">
                            @foreach($comic['writers'] as $writer)
                            <span class="brand-color fw-bold"> {{$writer}} </span>
                            @if(!$loop -> last)
                            <span>,</span>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="col-6">
                    <h3 class="darker-brand">Specs</h3>
                    <hr>
                    <div class="row mt-3">
                        <div class="col-4">
                            <p class="darker-brand">Series :</p>
                        </div>
                        <div class="col-8 ">
                            <p class="text-uppercase brand-color fw-bold">{{ $comic['series'] }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <p class="darker-brand">U.S. Price:</p>
                        </div>
                        <div class="col-8 ">
                            <p> {{ $comic['price'] }} </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <p class="darker-brand">On Sale Date:</p>
                        </div>
                        <div class="col-8 ">
                            <p class="text-uppercase">{{ $comic['sale_date'] }}</p>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection