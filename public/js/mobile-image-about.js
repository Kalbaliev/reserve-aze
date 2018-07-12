/**
 * Created by Kalbaliev on 12/26/2017.
 */



// {{--Telefonla girende sekillerin ferqli olmasi--}}
if ((screen.width>=320 && screen.width<=767)) {

    $("#about-content-common-img").attr("src","/images/mobile/about-content.jpg");
}


else if ((screen.width>=768 && screen.width<=1023)){

    $("#about-content-common-img").attr("src","/images/tablet/about-content.jpg");

}
else {

    $("#about-content-common-img").attr("src","/images/pc/about-content.jpg");
}