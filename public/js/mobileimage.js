/**
 * Created by Kalbaliev on 12/26/2017.
 */



// {{--Telefonla girende sekillerin ferqli olmasi--}}
if ((screen.width>=320 && screen.width<=767)) {
    $("#myimage1").attr("src","/images/mobile/4.jpg");
    $("#myimage2").attr("src","/images/mobile/1.jpg");
    // $("#myimage3").attr("src","/images/indexSlide/mobile/3.jpg");
    $("#myimage4").attr("src","/images/mobile/2.jpg");

}


else if ((screen.width>=768 && screen.width<=769)) {
    $("#myimage1").attr("src","/images/tablet/4.jpg");
    $("#myimage2").attr("src","/images/tablet/1.jpg");
    // $("#myimage3").attr("src","/images/indexSlide/mobile/3.jpg");
    $("#myimage4").attr("src","/images/tablet/2.jpg");

}
else {
    $("#myimage1").attr("src","/images/pc/4.jpg");
    $("#myimage2").attr("src","/images/pc/1.jpg");
    // $("#myimage3").attr("src","/images/indexSlide/laptop1920/3.jpg");
    $("#myimage4").attr("src","/images/pc/2.jpg");

}