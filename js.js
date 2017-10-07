/**
 * Created by macbook-retina on 2017-09-13.
 */

//hide the first button after 10:30
//stop ordering food after 11:00AM
$(document).ready(function () {
    var today = new Date();

    // what is the hour of current time
    var hour = today.getHours();
    //test for time
    // time=12;
    var minutes = today.getMinutes();

    var time = hour + minutes/60;

    //what is the day today
    var my_day = today.getDay();

    //test for Sunday;
    // my_day = 1;
    //test for Sunday

    console.log(my_day);
    console.log(time);


    // if over 11:00AM in the morning and not Sunday
    // it will hide the first item of button
    //for example: Monday 11:30, it will not show monday button
    //sunday will show the next week meals
    //sunday = 0
    if (time>= 10.5 && my_day != 0 && my_day != 6 ) {

        $('button').first().hide();

    }


});



//Go to top
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
