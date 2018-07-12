<!doctype html>
<html lang="az">
<head>


    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Restoranların onlayn rezervi, Onlayn restoran bələdçisi, Menyular">
    <meta name="keywords" content="Rezerv, Rezerv Azerbaijan,Menyu,Restoran">
    <meta name="author" content="Ali Kalbaliev">
    <meta property="og:image" content="/images/logo/logo-icon/png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/images/logo/logo-icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserve Azerbaijan</title>







    <!-- Vendor CSS -->
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/vendor/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="/vendor/fontawesome/css/font-awesome.css">
    <link rel="stylesheet" href="/css/theme-animate.css">
    <link rel="stylesheet" href="/vendor/rs-plugin/css/settings.css" media="screen">
    <link rel="stylesheet" href="/css/header.css">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="/vendor/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="/vendor/owl-carousel/owl.theme.default.css">


    {{--Oz fontumuz--}}
    <link rel="stylesheet" href="/css/font.css">


    <style>


        .navbar-inverse .navbar-nav li a.active ,
        .navbar-inverse .navbar-nav li a.active :hover,
        .navbar-inverse .navbar-nav li a.active :focus {
            color: gold;
            background-color: transparent;
        }
    </style>

    @yield('css')
</head>
<body>

<header >

    <nav class="navbar navbar-inverse">
        <img src="/images/logo/logo.png" alt="reserv-aazerbaijan-logo">


            <div class="container-fluid">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                </div>
                <div class="navbar-collapse collapse " id="myNavbar">
                <ul  class="nav navbar-nav">


                    <li><a  href="/">Ana Səhifə</a></li>
                    <li><a  href="/restoranlar">Restoranlar</a></li>
                    <li><a  href="/haqqimizda">Haqqımızda</a></li>
                    <li><a  href="/elaqe">Əlaqə</a></li>

                </ul>
                </div>
            </div>
        </div>
    </nav>
</header>

<div id="mainContent">
@yield('content')
</div>
<footer>
    <div class="footer">
        <div class="col-md-12 ">
            <div class="col-md-1"></div>
            <div  class="col-md-10 sponsors">
                <h1 class="sponsor-caption" >Əməkdaşlıq</h1>
                <div class="owl-carousel owl-theme">
                    <div class="item">

                        <img class="sponsor-img"  src="/images/sponsors/sponsor10.png" alt="xinfy">
                    </div>
                    <div class="item">
                        <img class="sponsor-img"   src="/images/sponsors/sponsor11.png" alt="google">
                    </div>
                    <div class="item">
                        <img class="sponsor-img"   src="/images/sponsors/sponsor12.png" alt="intel">
                    </div>
                    <div class="item">
                        <img class="sponsor-img"   src="/images/sponsors/sponsor13.png" alt="microsoft">
                    </div>
                    <div class="item">
                        <img class="sponsor-img"   src="/images/sponsors/sponsor14.png" alt="macdonalds">
                    </div>
                    <div class="item">
                        <img class="sponsor-img"  src="/images/sponsors/sponsor15.png" alt="pepsi">
                    </div>
                    <div class="item">
                        <img class="sponsor-img"   src="/images/sponsors/sponsor16.png" alt="cola">
                    </div>

                </div>


            </div>


        </div>



    </div>
    <div class="my-footer" >
        <img src="/images/logo/logo-icon.png"  alt="reserve-azerbaijan-logo">  <b style="color: white">Reserve </b> <b style="color:goldenrod">Azerbaijan</b> <b style="color: white">© 2018 by
            <a style="color:orangered" href="http://kalbaliev-dev.000webhostapp.com/"><u>Kalbaliev</u> </a></b>
    </div>
</footer>

<!-- Vendor -->
<script src="/vendor/jquery/jquery.js"></script>
<script src="/vendor/jquery.appear/jquery.appear.js"></script>
<script src="/vendor/jquery.easing/jquery.easing.js"></script>
<script src="/vendor/jquery.validation/jquery.validation.js"></script>
<script src="/vendor/bootstrap/bootstrap.js"></script>

<script>


      $(document).ready(function($){

      var path=window.location.pathname.split("/").pop();


     var link = "/"+path;
     $(".navbar li a").removeClass("active");
     var target = $('.navbar li a[href="'+link+'"]');
     target.addClass("active");


          if ((screen.width>=320 && screen.width<=768)) {
              if (link == '/') {

                  $('header').css("position", "absolute");
              }
          }
  });


</script>


<script>


//    if ((screen.width>=320 && screen.width<=767)) {
//
//
//        var sayi=1;
//
//        $(".navbar-toggle").click(function () {
//
//            sayi+=1;
//            if(sayi%2==0){
//
//                $('.section').css('overflow', 'hidden');
//            }
//            else{
//
//                $('.section').css('overflow', 'auto');
//
//            }
//
//        });
//    };

</script>
{{--Revolution slider--}}
<script src="/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

{{--Header menu changing--}}
<script type="text/javascript" >

    $(window).on('scroll',function () {

        if($(window).scrollTop()){

            $('nav').addClass('changeTheme');
        }
        else{
            $('nav').removeClass('changeTheme');
        }


    })



</script>




{{--Slider  Əməkdaşlıq hissədəki firmalar üçün--}}
<script src="/vendor/owl-carousel/owl.carousel.js"></script>
<script>



    if ((screen.height>320 && screen.height<759)&&(screen.width>320 && screen.width<759)) {

        $('.owl-carousel').owlCarousel({
            autoplay:true,
            autoplayTimeout:1000,
            loop:true,
            margin:5,

            dots:false,
            nav:true,
            responsive:{
                0:{
                    items:3
                },

                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        })
    }

    else{

        $('.owl-carousel').owlCarousel({
            autoplay:true,
            autoplayTimeout:5000,
            loop:true,
            margin:10,
            mouseDrag:false,
            dots:false,
            nav:true,
            responsive:{
                0:{
                    items:3
                },

                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })

    }



</script>
@yield('js')
</body>
</html>
