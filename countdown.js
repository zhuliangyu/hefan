/**
 * 建立一个增加天数的方法
 */
Date.prototype.addDays = function (days) {
    var dat = new Date(this.valueOf());
    dat.setDate(dat.getDate() + days);
    return dat;
};

/**
 * 获得现在的时间, 小时数, 分钟数
 */
var today = new Date();
var todayHours = today.getHours();
var todayMinutes = today.getMinutes();

if ((todayHours + todayMinutes/60)<10.5 ){
    //在10点半前的时间, 计算截单时间距离是*当天*的10点半
    var tommorrow = today;
}else{
    //10点半之后的时间, 计算截单时间是*第二天*的10点半
    var tommorrow = today.addDays(1);

}

/**
 * 设置10点半的时间点
 */
tommorrow.setHours(10);
tommorrow.setMinutes(30);
tommorrow.setSeconds(0);


// Set the date we're counting down to
// var countDownDate = new Date("Oct 13, 2017 15:37:25").getTime();
var countDownDate = tommorrow.getTime();

// Update the count down every 1 second
var x = setInterval(function () {
    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    // Display the result in the element with id="demo"

    dayOfWeek = today.getDay();
    console.log(dayOfWeek);

    if(dayOfWeek!=7 && dayOfWeek!=6 ){
        document.getElementById("countdown").innerHTML = "距离截单还有: "+ hours + "小时 "
            + minutes + "分钟 " + seconds + "秒 ";

    }

},1000);



