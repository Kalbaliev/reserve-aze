
@extends('frontend.app')

@section('content')

    <div id="wrapper" >

        <div class="section">

            <div class="restaurants-headline"></div>
            <div class="col-md-12">


                    <div class="restaurants">
                        <h1>Restoranlar</h1>


                        <div class="row">
                            <div class="vip-board">
                                <h2>V.I.P   <img style="width: 40px;height: 40px;margin-top: -10px;" src="/images/icons/vip.png" alt="v.i.p"></h2>
                                <div class="restaurant">
                                    <a href="/restoranlar/birRestoran">
                                        <img class="restaurant-image" src="/images/restaurants/billionaire/profile.jpg" alt="">
                                    </a>
                                </div>
                                <div class="restaurant">
                                    <a href="/restoranlar/birRestoran">
                                        <img class="restaurant-image" src="/images/restaurants/billionaire/profile.jpg" alt="">
                                    </a>
                                </div>
                                <div class=" ads">


                                  {{--<a class="order-button" href="/technology"></a>--}}
                                    <a href="/"><button class="btn-my" ><span>Sifariş et</span></button></a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="simple-board">
                                <h2>Digər</h2>
                                <div class="restaurant">
                                    <a href="/restoranlar/birRestoran">
                                        <img class="restaurant-image" src="/images/restaurants/billionaire/profile.jpg" alt="">
                                    </a>
                                </div>
                                <div class="restaurant">
                                    <a href="/restoranlar/birRestoran">
                                        <img class="restaurant-image" src="images/restaurants/billionaire/profile.jpg" alt="">
                                    </a>
                                </div>
                                <div class="restaurant">
                                    <a href="/restoranlar/birRestoran">
                                        <img class="restaurant-image" src="/images/restaurants/billionaire/profile.jpg" alt="">
                                    </a>
                                </div>
                                <div class="restaurant">
                                    <a href="/restoranlar/birRestoran">
                                        <img class="restaurant-image" src="/images/restaurants/billionaire/profile.jpg" alt="">
                                    </a>
                                </div>
                                <div class="restaurant">
                                    <a href="/restoranlar/birRestoran">
                                        <img class="restaurant-image" src="/images/restaurants/billionaire/profile.jpg" alt="">
                                    </a>
                                </div>
                                <div class="restaurant">
                                    <a href="/restoranlar/birRestoran">
                                        <img class="restaurant-image" src="/images/restaurants/billionaire/profile.jpg" alt="">
                                    </a>
                                </div>
                                <div class="restaurant">
                                    <a href="/restoranlar/birRestoran">
                                        <img class="restaurant-image" src="/images/restaurants/billionaire/profile.jpg" alt="">
                                    </a>
                                </div>

                            </div>
                        </div>

                    </div>

           </div>
        </div>
    </div>
@endsection

@section('css')

    <link rel="stylesheet" href="/css/restaurants.css">
    <style>



    </style>
@endsection


@section('js')

@endsection