@extends('layouts.app')

@section('page-title', 'Home')


@section('content')
<div class="jumbo_img">
    <img src="{{asset('img/jumbotron.jpg')}}" alt="">
</div>

<div class="bg_secondary py-5">
    <div class="container">
        <div class="row">
            @foreach($comics as $comic)
            <div class="col-2">
                <div class="card">
                    <img src="{{$comic['thumb']}}" alt="" height="200px">
                </div>
                <h5 class="text-white text-uppercase py-4">{{ $comic['title'] }}</h5>
            </div>
            @endforeach
        </div>
    </div>
    <div class="load_more">LOAD MORE</div>
</div>
<div class="primary_background d-flex">
    <div class="cards d-flex">
        <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="" />
        <p>DIGITAL COMICS</p>
    </div>
    <div class="cards d-flex">
        <img src="{{asset('img/buy-comics-digital-merchandise.png')}}" alt="" />
        <p>DC MERCHADISE</p>
    </div>
    <div class="cards d-flex">
        <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="" />
        <p>SUBSCTIPTION</p>
    </div>
    <div class="cards d-flex">
        <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="" />
        <p>COMIC SHOP LOCATOR</p>
    </div>
    <div class="cards d-flex">
        <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="" />
        <p>CD POWER VISA</p>
    </div>
</div>

@endsection