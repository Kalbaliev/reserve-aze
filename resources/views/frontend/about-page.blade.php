
@extends('frontend.app')

@section('content')
    <div id="wrapper" >
        <div class="section">
            <div class="about-page-cover">

                <div class="about-content">

                    <h1>Rezerv Azərbaycan</h1>
                    <p>Restoranların haqında hər şey: Menyu, Telefon, Ünvan, Rezerv. Bakı şəhərində restoranlara rezerv xidməti. Tezliklə bütün Azərbaycan ərazisində</p>
                    <button id="moveDown" class="btn-more">Ətraflı</button>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="about-we">
            <div class="col-md-12">
              <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="about-we-content">
                        <h1>Biz kimik ?</h1>
                        <div class="about-common-content">
                            <div class="about-content-common-image">
                                <img style="width: 100%;height: 100%" id="about-content-common-img" src="" alt="">
                            </div>
                            <div class="about-content-common-text">
                               <h2>&nbsp &nbsp &nbsp<b>Rezerv.Az</b> – rezerv təcrübənizi daha da yüksəltmək məqsədilə, tanınmış restoranlarda yer ayırmaq və əyləncəli vaxt keçirməyiniz üçün sizin xidmətinizdədir…
                                   <br>&nbsp &nbsp &nbsp<b>Rezerv.Az</b> sizə rezerv etmək üçün sərf etdiyiniz vaxtı tam minumuma endirməyə görə çalışır, restoranlar haqqında daha ətraflı məlumatları sizlərə çatdırır, menyuların tam göstərilməsi ilə istirahətinizi istədiyiniz kimi rahat və əyləncəli keçirməyinizə şərait yaradır.
                               </h2>
                            </div>
                        </div>
                        <div class="about-person-content">
                    <h1>Bizim Komanda</h1>
                                <div class="about-person">
                                    <div class="about-person-image"><img src="/images/persons/person1.jpg" alt="Vusal"></div>
                                    <div class="about-person-text"><h3><b>Vüsal Əhmədzadə</b></h3><p>Layihə meneceri - Kalbaliev İnc. şirkətində <b>menecer</b> vəzifəsində işləyir</p></div>


                                    <div class="about-page-box-social"></div>
                                    <div class="about-person-social">


                                        <a href="#" ><i class="fa fa-facebook"></i></a>
                                        <a href="#" ><i class="fa fa-google"></i></a>
                                        <a href="#" ><i class="fa fa-instagram"></i></a>
                                        <a href="#" ><i class="fa fa-youtube"></i></a>

                                    </div>

                                </div>
                            <hr>
                                <div class="about-person">
                                    <div class="about-person-text"><h3><b>Nurlan Əhmədli</b></h3><p>Layihə rəhbəri - Kalbaliev İnc. şirkətində <b>direktor</b> vəzifəsində işləyir</p></div>
                                    <div class="about-person-image"><img src="/images/persons/person3.jpg" alt="Nurlan"></div>
                                    <div class="clear"></div>
                                    <div class="about-person-social">

                                        <a href="#" ><i class="fa fa-facebook"></i></a>
                                        <a href="#" ><i class="fa fa-google"></i></a>
                                        <a href="#" ><i class="fa fa-instagram"></i></a>
                                        <a href="#" ><i class="fa fa-youtube"></i></a>

                                    </div>

                                </div>
                            <hr>

                                <div class="about-person">
                                    <div class="about-person-image"><img src="/images/persons/person2.jpg" alt="Ali"></div>
                                    <div class="about-person-text"><h3><b>Əli Kəlbəliyev</b></h3><p>Layihə təsisçisi - Kalbaliev İnc. şirkətində <b>veb proqramçı</b> vəzifəsində işləyir</p></div>
                                    <div class="clear"></div>
                                    <div class="about-page-box-social"></div>
                                    <div class="about-person-social">


                                        <a href="#" ><i class="fa fa-facebook"></i></a>
                                        <a href="#" ><i class="fa fa-google"></i></a>
                                        <a href="#" ><i class="fa fa-instagram"></i></a>
                                        <a href="#" ><i class="fa fa-youtube"></i></a>

                                    </div>
                                </div>

                        </div>


                        <div class="clear"></div>
                        <div class="about-why">
                            <h1>Niyə Rezerv.Az</h1>
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                            <ul>
                                <h2>Veb sayta nələr daxildir :</h2>
                                <b>  <li><h2>Bakı şəhəri üzrə tanınmış , keyfiyyətli və yeni fəaliyyət göstərən restoran, pub, lounge məkanları buradadır. Bu sayt sayəsində yeni məkanları ilk siz kəşf edin.</h2></li></b>
                                <b>  <li><h2>Seçilmiş məkanın daxili və xarici dizaynını əks etdirən fotoşəkillər. Artıq məkanların gözəlliyini öncədən görəcəksiniz.</h2></li></b>
                                <b> <li><h2>Məkanda olan xidmətlər, menyular, mətbəx növləri və ən əsas qiymətləri bu saytda cəmləşdirilib. </h2></li></b>
                                    <b>  <li><h2>Restoran haqqında fikirlər, məlumatlar, kampaniyalar və ünvanlar saytda yerləşdirilib. </h2></li></b>

                            </ul>
                            </div>
                        </div>
                        <div class="clear"></div>

                            <div class="about-video">
                                <h1>Rezerv.az video çarx</h1>



                                         <iframe    src="https://www.youtube.com/embed/5xIvwtFPK3E"  ></iframe>


                            </div>

                    </div>
                </div>
              <div class="col-md-1"></div>
            </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/jquery.fullPage.css">
    <link rel="stylesheet" href="/css/about-page.css">

@endsection


@section('js')



    <script src="/js/mobile-image-about.js"></script>
    <script src="/js/jquery.fullPage.js"></script>
    <script>


        $('#wrapper').fullpage();

        $(document).on('click', '#moveDown', function(){
            $.fn.fullpage.moveSectionDown();
        });
    </script>
@endsection