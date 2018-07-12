

@extends('frontend.app')

@section('content')

  <div id="wrapper" >
      <div class="section">

              {{--Slide classini sildik--}}

              <div id="sliderRevo"  data-plugin-revolution-slider data-plugin-options='{"startheight": 1000}'>

                  <ul>

                      <li  data-transition="fade" data-slotamount="10" data-masterspeed="1000" >



                          <div class="sliderPages" >

                              <div style="  text-align: center;color:#555555;margin-left: 100px; font-size: 50px;" class="tp-caption top-label lfl stl"
                                   data-y="240"
                                   data-speed="300"
                                   data-start="1000"
                                   data-easing="Power3.easeOut">
                                  Rezerv.Az
                              </div>
                              <div style=" text-align: center;color:#555555;margin-left: 100px; font-size: 70px;" class="tp-caption main-label sft stb"

                                   data-y="300"
                                   data-speed="300"
                                   data-start="1500"
                                   data-easing="easeOutBack">
                                  Bakıda ilk dəfə
                              </div>


                              <div style=" text-align: center; color:#555555;margin-left: 100px; font-size: 40px;" class="tp-caption blackboard-text lfb "

                                   data-y="370"
                                   data-speed="500"
                                   data-start="2000"
                                   data-easing="easeOutExpo">
                                  İstirahət belə asan olmamışdı
                                  {{--{{trans('index.picture1title3')}}--}}
                              </div>
                          </div>


                          {{--<img id="image1" src="/images/indexSlide/4.jpg" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">--}}
                          <img id="myimage1" src="/images/pc/4.jpg" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                      </li>
                      <li  data-transition="fade" data-slotamount="2" data-masterspeed="500" >
                          <div class="sliderPages" >

                              <div style="  text-align: center;color:white;margin-left: 100px; font-size: 50px;" class="tp-caption top-label lfl stl"
                                   data-y="180"
                                   data-speed="300"
                                   data-start="1000"
                                   data-easing="Power3.easeOut">
                                  Rezerv.Az
                              </div>
                              <div style=" text-align: center; color:white;margin-left: 100px; font-size: 70px;" class="tp-caption main-label sft stb"

                                   data-y="240"
                                   data-speed="300"
                                   data-start="1500"
                                   data-easing="easeOutBack">
                                  Bakıda ilk dəfə
                              </div>


                              <div style=" text-align: center; color:white;margin-left: 100px; font-size: 40px;" class="tp-caption blackboard-text lfb "

                                   data-y="310"
                                   data-speed="500"
                                   data-start="2000"
                                   data-easing="easeOutExpo">
                                  İstirahət belə asan olmamışdı
                                  {{--{{trans('index.picture1title3')}}--}}
                              </div>
                          </div>
                          <img id="myimage2" src="/images/pc/1.jpg" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">



                      </li>
                      {{--<li  data-transition="zoomout" data-slotamount="5" data-masterspeed="500" >--}}
                          {{--<div class="sliderPages" >--}}

                              {{--<div style="  text-align: center;color:white;margin-left: 100px; font-size: 50px;" class="tp-caption top-label lfl stl"--}}
                                   {{--data-y="180"--}}
                                   {{--data-speed="300"--}}
                                   {{--data-start="1000"--}}
                                   {{--data-easing="Power3.easeOut">--}}
                                  {{--Rezerv.Az--}}
                              {{--</div>--}}
                              {{--<div style=" text-align: center; color:white;margin-left: 100px; font-size: 70px;" class="tp-caption main-label sft stb"--}}

                                   {{--data-y="240"--}}
                                   {{--data-speed="300"--}}
                                   {{--data-start="1500"--}}
                                   {{--data-easing="easeOutBack">--}}
                                  {{--Bakıda ilk dəfə--}}
                              {{--</div>--}}


                              {{--<div style=" text-align: center; color:white;margin-left: 100px; font-size: 40px;" class="tp-caption blackboard-text lfb "--}}

                                   {{--data-y="310"--}}
                                   {{--data-speed="500"--}}
                                   {{--data-start="2000"--}}
                                   {{--data-easing="easeOutExpo">--}}
                                  {{--İstirahət belə asan olmamışdı--}}
                                  {{--{{trans('index.picture1title3')}}--}}
                              {{--</div>--}}
                          {{--</div>--}}
                          {{--<img id="myimage3" src="/images/indexSlide/laptop1920/3.jpg" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">--}}



                      {{--</li>--}}
                      <li  data-transition="fade"  data-slotamount="10" data-masterspeed="500" >
                          <div class="sliderPages">

                              <div style="  text-align: center;color:white;margin-left: 100px; font-size: 50px;" class="tp-caption top-label lfl stl"
                                   data-y="180"
                                   data-speed="300"
                                   data-start="1000"
                                   data-easing="Power3.easeOut">
                                  Rezerv.Az
                              </div>
                              <div style=" text-align: center; color:white;margin-left: 100px; font-size: 70px;" class="tp-caption main-label sft stb"

                                   data-y="240"
                                   data-speed="300"
                                   data-start="1500"
                                   data-easing="easeOutBack">
                                  Bakıda ilk dəfə
                              </div>


                              <div style=" text-align: center; color:white;margin-left: 100px; font-size: 40px;" class="tp-caption blackboard-text lfb "

                                   data-y="310"
                                   data-speed="500"
                                   data-start="2000"
                                   data-easing="easeOutExpo">
                                  İstirahət belə asan olmamışdı
                                  {{--{{trans('index.picture1title3')}}--}}
                              </div>
                          </div>
                          <img id="myimage4" src="/images/pc/2.jpg" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">


                      </li>


                  </ul>

<div  class="down-arrow">
   <a id="moveDown">
       <img class="animated bounce slideOutDown" id="downArrow" src="/vendor/rs-plugin/assets/down.png" alt="down-arrow">
   </a>

</div>
          </div>


      </div>
      <div class="section"  >
          <div class="services">
               <div class="col-md-12">
                   <div class="ourservices">
                         <div data-aos="fade-up" data-aos-anchor-placement="bottom-center" >
                                <div class="col-md-3 service-link effect2">
                                    <div class="photo-part">
                                        <img src="/images/icons/location4.png" alt="location">
                                    </div>
                                    <div class="content-part">



                                        <h2>Onlayn bələdçi</h2>


                                    </div>
                                </div>
                                <div class="col-md-3 service-link effect2">
                                    <div class="photo-part">
                                        <img src="/images/icons/reserve1.png" alt="location">
                                    </div>
                                    <div class="content-part">
                                        <h2>Restoranların rezervi</h2>  </div>
                                </div>
                                <div class="col-md-3 service-link effect2">
                                    <div class="photo-part">
                                        <img  src="/images/icons/menu.png" alt="location">
                                    </div>
                                    <div class="content-part">
                                        <h2>Restoranlar və menyular</h2>  </div>
                                </div>
                   </div>
                   </div>
               </div>
          </div>

      </div>


  </div>

@endsection


@section('css')


    <link rel="stylesheet" href="/css/jquery.fullPage.css">
    <link rel="stylesheet" href="/css/index-elements.css">



@endsection

@section('js')

    <script src="/js/mobileimage.js"></script>
    <script src="/js/revolutionslidersetting.js"></script>
    {{--FullpageJS--}}
    <script src="/js/jquery.fullPage.js"></script>
    <script>


      $('#wrapper').fullpage();

      $(document).on('click', '#moveDown', function(){
          $.fn.fullpage.moveSectionDown();
      });
    </script>
    {{--Aos --}}
    <script>
        AOS.init({
            offset: 100,
            duration: 500,
            easing: 'ease-in',
            delay: 100,
            disable: 'mobile'
        });
    </script>


@endsection