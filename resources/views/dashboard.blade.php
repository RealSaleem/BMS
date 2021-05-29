@extends('layouts.app')
@section('content')
@section('title')
    <title>BMS | Dashboard</title>
@endsection

<div id="ecommerce-offer">
    <div class="row">
        <div class="col s12 m3">
            <div class="card gradient-shadow gradient-45deg-light-blue-cyan border-radius-3 animate fadeUp">
                <div class="card-content center">
                    <img src="../../../app-assets/images/icon/apple-watch.png" class="width-40 border-round z-depth-5 responsive-img" alt="image" />
                    <h5 class="white-text lighten-4">50% Off</h5>
                    <p class="white-text lighten-4">On apple watch</p>
                </div>
            </div>
        </div>
        <div class="col s12 m3">
            <div class="card gradient-shadow gradient-45deg-red-pink border-radius-3 animate fadeUp">
                <div class="card-content center">
                    <img src="../../../app-assets/images/icon/printer.png" class="width-40 border-round z-depth-5 responsive-img" alt="images" />
                    <h5 class="white-text lighten-4">20% Off</h5>
                    <p class="white-text lighten-4">On Canon Printer</p>
                </div>
            </div>
        </div>
        <div class="col s12 m3">
            <div class="card gradient-shadow gradient-45deg-amber-amber border-radius-3 animate fadeUp">
                <div class="card-content center">
                    <img src="../../../app-assets/images/icon/laptop.png" class="width-40 border-round z-depth-5 responsive-img" alt="image" />
                    <h5 class="white-text lighten-4">40% Off</h5>
                    <p class="white-text lighten-4">On apple macbook</p>
                </div>
            </div>
        </div>
        <div class="col s12 m3">
            <div class="card gradient-shadow gradient-45deg-green-teal border-radius-3 animate fadeUp">
                <div class="card-content center">
                    <img src="../../../app-assets/images/icon/bowling.png" class="width-40 border-round z-depth-5 responsive-img" alt="image" />
                    <h5 class="white-text lighten-4">60% Off</h5>
                    <p class="white-text lighten-4">On any game</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
