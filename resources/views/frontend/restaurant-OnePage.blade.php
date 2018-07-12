

@extends('frontend.app')

@section('content')



    <div id="wrapper" >

        <div class="section">
            <div class="col-md-12">
                <div class="col-md-2 left-size-box">

                </div>

                <div class="col-md-8 info-restaurant" >


                    <div class="cover-restaurant"></div>

                    <div class="content-restaurant ">
                        <div class="profile-restaurant">
                            <div class="profile-photo"></div>
                            <div class="profile-contact">
                                <h2>Billionare Lounge</h2>
                                <h4>(077) 521-14-96</h4>
                                <h4>Səməd Vurğun küç. 54C</h4>
                                <h4>İş vaxtı: 11:00 - 02:00</h4>
                                <button  class="btn-my" ><span><i class="fa fa-facebook"></i> </span></button>
                                <button   class="btn-my" ><span><i class="fa fa-instagram"></i> </span></button>
                            </div>
                        </div>
                        <div class="about-restaurant">
                            <div class="text-restaurant"> <h2 style="font-family: 'Reserve Azerbaijan'">Artıq neçə ildirki bizim restoran Bakı şəhərində keyfiyyətinə görə yüksək yeri tutur. Siz burada yerli və xarici mətbəxlərdən olan yeməklərin və içkilərin dadına baxa bilərsiniz. Bizim restoranımızın özünə məxsus dizaynı sizin gözünüzü oxşayacaq.</h2>
                                <button id="modal-btn" class="reserve-button"> <span>Rezerv et </span></button>

                                <div id="myModal" class="my-Modal">
                                    <div class="modalContent">

                                        <div class="modalHeader">

                                            <span id="close" class="closeModal"><i class="fa fa-times" aria-hidden="true"></i></span>
                                        </div>

                                        <div class="modalBody">
                                            <div class="reserve-Box">
                                                <h2>Rezerv et !</h2>
                                                <div class="row">
                                                    <form class="col s12">
                                                        <div class="row">
                                                            <div class="input-field col s6">

                                                                <input id="firstname" type="text" class="validate">
                                                                <label class="label-class" for="firstname">Ad</label>
                                                            </div>

                                                            <div class="input-field col s6">

                                                                <input id="lastname" type="tel" class="validate">
                                                                <label for="firstname">Soyad</label>
                                                            </div>

                                                            <div class="input-field col s6">

                                                                <input id="restaurant" type="text" class="validate">
                                                                <label for="restaurant">Restoran</label>
                                                            </div>
                                                            <div class="input-field col s6">

                                                                <input id="telephone" type="tel" class="validate">
                                                                <label for="telephone">Telefon</label>
                                                            </div>





                                                            <div style="padding: 0;margin: 0" class="input-field col s6">
                                                                <div class="input-field col s12">
                                                                    <input id="date-reserve" type="text" class="datepicker">
                                                                    <label for="date-reserve">Tarix</label>
                                                                </div>
                                                                <div class="input-field col s12">
                                                                    <select>
                                                                        <option value="" disabled selected>Müddət seçin</option>
                                                                        <option value="1">1 saat</option>
                                                                        <option value="2">2 saat</option>
                                                                        <option value="3">3 saat</option>
                                                                    </select>
                                                                    <label>Neçə saat ?</label>
                                                                </div>

                                                                <div class="input-field col s12">
                                                                    <select>
                                                                        <option value="" disabled selected>Adam sayını seçin</option>
                                                                        <option value="1">1 nəfər</option>
                                                                        <option value="2">2 nəfər</option>
                                                                        <option value="3">3 nəfər</option>
                                                                    </select>
                                                                    <label>Neçə nəfərlik</label>
                                                                </div>
                                                            </div>


                                                            <div class="input-field col s6">
                                                                <textarea  id="textarea-reserve" class="materialize-textarea"></textarea>
                                                                <label for="textarea-reserve">Xüsusi qeyd</label>
                                                            </div>


                                                            <button  class="btn-my" type="submit"  name="action"><span>Rezerv et </span></button>

                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="album-restaurant">
                            <div class="photos-of-restaurant">
                                <a href="/images/restaurants/billionaire/photo1.jpg"><img src="/images/restaurants/billionaire/photo1s.jpg" alt="photo1"></a>
                            </div>
                            <div class="photos-of-restaurant">
                                <a href="/images/restaurants/billionaire/photo2.jpg"><img src="/images/restaurants/billionaire/photo2s.jpg" alt="photo3"></a>
                            </div>
                            <div class="photos-of-restaurant">
                                <a href="/images/restaurants/billionaire/photo3.jpg"><img src="/images/restaurants/billionaire/photo3s.jpg" alt="photo3"></a>
                            </div>
                            <div class="photos-of-restaurant">
                                <a href="/images/restaurants/billionaire/photo4.jpg"><img src="/images/restaurants/billionaire/photo4s.jpg" alt="photo4"></a>
                            </div>
                            <div class="photos-of-restaurant">
                                <a href="/images/restaurants/billionaire/photo5.jpg"><img src="/images/restaurants/billionaire/photo5s.jpg" alt="photo5"></a>
                            </div>
                            <div class="photos-of-restaurant">
                                <a href="/images/restaurants/billionaire/photo6.jpg"><img src="/images/restaurants/billionaire/photo6s.jpg" alt="photo6"></a>
                            </div>
                            <div class="photos-of-restaurant">
                                <a href="/images/restaurants/billionaire/photo7.jpg"><img src="/images/restaurants/billionaire/photo7s.jpg" alt="photo7"></a>
                            </div>
                            <div class="photos-of-restaurant">
                                <a href="/images/restaurants/billionaire/photo8.jpg"><img src="/images/restaurants/billionaire/photo8s.jpg" alt="photo8"></a>
                            </div>

                        </div>

                    </div>

                    <h1>Menyu</h1>
                    <div   data-aos="fade-up"  >
                        <div class="menu-of-restaurant">

                            <div class="names-of-menu">

                                @foreach($menus as $menu)
                                     <button id="{{$menu->photo_name}}"  onclick="changePhoto(this,'{{$menu->id}}')" class="button">{{$menu->menu_name}}</button>


                                @endforeach
@php

$price = DB::table('menus')->min('id');
@endphp


                            </div>

                            <div class="about-menu">
                                <div class="photo-of-menu">
                                    <img id="menu-photo" src="/images/restaurants/menus/menu1.jpg" alt="menu-photo">
                                </div>

                                
                                
                                    <div id="ajax" class="ajax-preloader hidden-preloader"><img src="/images/preloader.gif" alt="preloader-ajax"></div>
                                <div class="content-of-menu">


                                    @foreach(\App\Foods::where('menu_id',$price)->get() as $food)

                                    <div class="content-food">
                                        <p class="food-name">{{$food->food_name}}</p><p class="food-price">{{$food->food_price}}</p>
                                    </div>
@endforeach

                                </div>

                            </div>

                        </div>
                    </div>
                </div>


            </div></div>


    </div>

@endsection


@section('css')



    <link rel="stylesheet" href="/vendor/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="/vendor/owl-carousel/owl.theme.default.css">
    <link rel="stylesheet" href="/css/one-restoran.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&text=%21%22%23%24%25%26%27%28%29%30+,-./0123456789:;%3C=%3E%3F@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`%E2%82%AC„‘’“”™©®°µ±÷abcdefghijklmnopqrstuvwxyz{|}~%C3%9C%C3%96%C4%9E%C4%B0%C6%8F%C3%87%C5%9E%C3%BC%C3%B6%C4%9F%C4%B1%C9%99%C3%A7%C5%9F" rel="stylesheet">
    <link rel="stylesheet" href="/css/index-elements.css">
    <link href="/vendor/lightbox/dist/simplelightbox.min.css" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/css/modal.css">
    <link rel="stylesheet" href="/vendor/materialize/css/materialize.css">
@endsection

@section('js')


{{--Aos--}}
    <script>
        AOS.init({
            offset: 100,
            duration: 500,
            easing: 'ease-in',
            delay: 100,
            disable: 'mobile'
        });
    </script>

    {{--galeriya plugin--}}
    <script type="text/javascript" src="/vendor/lightbox/dist/simple-lightbox.js"></script>
    <script>
        $(function(){
            var $gallery = $('.album-restaurant a').simpleLightbox();

            $gallery.on('show.simplelightbox', function(){
                console.log('Requested for showing');
            })
                .on('shown.simplelightbox', function(){
                    console.log('Shown');
                })
                .on('close.simplelightbox', function(){
                    console.log('Requested for closing');
                })
                .on('closed.simplelightbox', function(){
                    console.log('Closed');
                })
                .on('change.simplelightbox', function(){
                    console.log('Requested for change');
                })
                .on('next.simplelightbox', function(){
                    console.log('Requested for next');
                })
                .on('prev.simplelightbox', function(){
                    console.log('Requested for prev');
                })
                .on('nextImageLoaded.simplelightbox', function(){
                    console.log('Next image loaded');
                })
                .on('prevImageLoaded.simplelightbox', function(){
                    console.log('Prev image loaded');
                })
                .on('changed.simplelightbox', function(){
                    console.log('Image changed');
                })
                .on('nextDone.simplelightbox', function(){
                    console.log('Image changed to next');
                })
                .on('prevDone.simplelightbox', function(){
                    console.log('Image changed to prev');
                })
                .on('error.simplelightbox', function(e){
                    console.log('No image found, go to the next/prev');
                    console.log(e);
                });
        });
    </script>


    {{--Menuya php-den info oturulmesi ajax --}}
    <script>
        $(document).ready(function () {

            $("#menu1").addClass("clicked");
        })

        function changePhoto(menu,p) {

            var p1 = p;
            //alert(p1);

            $(".names-of-menu .button").removeClass("clicked");
            $(menu).addClass("clicked");
            getFoods(p1);
            $("#menu-photo").fadeOut(500, function() {
            $("#menu-photo").removeAttr("src");})
            $(".content-food").fadeOut(500);


            $(this).css("display","none");
              var name = menu.id;
                var photo_name=name+".jpg"

                $("#menu-photo").fadeOut(500, function() {
                    $("#menu-photo").attr("src", "/images/restaurants/menus/" + photo_name);
                }).fadeIn(1000);


        }

        function getFoods(menuId){
            $.get('/restoranlar/menu/food/'+menuId,function (result) {
                console.log(result.foods)

                $("#ajax").removeClass("hidden-preloader");
                if(result.success){

                    var contentFood = $('.content-of-menu');
                    contentFood.html('');
                   $.each(result.foods,function (key,value) {

                          contentFood.append(
                              '<div class="content-food"><p class="food-name">'+value.food_name+'</p><p class="food-price">'+value.food_price+'</p></div>'
                          )

                    })
                    $("#ajax").addClass("hidden-preloader");
                }

            });

        }


    </script>




    {{--MOdal menu script--}}


    <script src="/vendor/materialize/js/materialize.js"></script>
    <script>
        var modal = $("#myModal");

        var modalbtn = $("#modal-btn");
        var closeBtn=$("#close");

        modalbtn.click(function () {


            modal.css("display","block");
            $('body').css('overflow', 'hidden');
        });

        closeBtn.click(function () {
//


            modal.css("display","none");
            $('body').css('overflow', 'auto');
        });

        $(window).click(function(e) {
            if(e.target==myModal){
                $('body').css('overflow', 'auto');
                modal.css("display","none");
            }
        });
    </script>

    {{--datetimepicker options--}}
    <script>

        $(document).ready(function() {
            $('select').material_select();
        });



        $('.datepicker').pickadate({
            format: 'dd/mm/yyyy',
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15,

            labelMonthNext: 'Sonrakı ay',
            labelMonthPrev: 'Əvvəlki ay',

            // The title label to use for the dropdown selectors
            labelMonthSelect: 'Ay seçin',
            labelYearSelect: 'İl seçin',
            monthsFull: ['Yanvar', 'Fevral', 'Mart', 'Aprel', 'May', 'İyun', 'İyul', 'Avqust', 'Sentyabr', 'Oktyabr', 'Noyabr', 'Dekabr'],
            weekdaysShort: ['Bzr','Bzr ert', 'Çrş axş', 'Çrş', 'Cüm axş', 'Cüm', 'Şnb'],
            weekdaysFull: ['Bazar', 'Bazar ertəsi', 'Çərşənbə axşamı', 'Çərşənbə', 'Cümə axşamı', 'Cümə', 'Şənbə'],
            monthsShort: ['Yan', 'Fev', 'Mar', 'Apr', 'May', 'İyn','İyl', 'Avq','Sen','Okt','Noy','Dek'],
            weekdaysLetter: [ 'B', 'BE', 'ÇA', 'Ç', 'CA', 'C', 'Ş' ],
            close:'SEÇ',
            formatSubmit: 'yyyy/mm/dd'
        });
    </script>

@endsection