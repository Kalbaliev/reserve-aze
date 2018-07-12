/**
 * Created by Kalbaliev on 12/26/2017.
 */

// {{--Sliderin deyisiklikleri--}}
$('#sliderRevo').show().revolution({
    startDelay: 2000,
    delay: 6500,
    startheight: 1080,
    fullScreen: "on",
    navigationType: "bullet",
    onHoverStop:"off",
    spinner: 'spinner3',

});

//{{--Sliderin yazilarinin ag rengde qoyanda colde olmaginin qarsinin alinmasi--}}
$(window).ready(function () {
    $('.tp-caption').css("color", "white");


    setTimeout(function(){
        $('.down-arrow').css("display","block");
        $('.tp-bullets').css("display","block");

    }, 3000);

})