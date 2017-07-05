(function ($) {


    $(function () {
        $(".mainNav li").each(function (ind, el) {
            $(el).mouseenter(function () {
                $(el).find(".dropNav").fadeIn();
            }).mouseleave(function () {
                $(el).find(".dropNav").fadeOut();
            });
            //$(el).on("tap",function(){
            //    $(this).find(".dropNav").toggle();
            //})
        });

        //function getRTime() {
        //    var EndTime = new Date($('.timerL').attr('data-time'));
        //    var NowTime = new Date();
        //    var t = EndTime.getTime() - NowTime.getTime();
        //    var d = Math.floor(t / 1000 / 60 / 60 / 24);
        //    var h = Math.floor(t / 1000 / 60 / 60 % 24);
        //    var m = Math.floor(t / 1000 / 60 % 60);
        //    var s = Math.floor(t / 1000 % 60);
        //    //document.getElementById('t_d').innerHTML = d + '<span>天</span>';
        //    document.getElementById('t_h').innerHTML = d;
        //    document.getElementById('t_m').innerHTML = h;
        //    document.getElementById('t_s').innerHTML = m;
        //}

        //var fnTimeCountDown = function(d, o){
        //    var f = {
        //        zero: function(n){
        //            var n = parseInt(n, 10);
        //            if(n > 0){
        //                if(n <= 9){
        //                    n = "0" + n;
        //                }
        //                return String(n);
        //            }else{
        //                return "00";
        //            }
        //        },
        //        dv: function(){
        //            d = d || Date.UTC(2050, 0, 1); //如果未定义时间，则我们设定倒计时日期是2050年1月1日
        //            var future = new Date(d), now = new Date();
        //            //现在将来秒差值
        //            var dur = Math.round((future.getTime() - now.getTime()) / 1000) + future.getTimezoneOffset() * 60, pms = {
        //                sec: "00",
        //                mini: "00",
        //                hour: "00",
        //                day: "00",
        //                month: "00",
        //                year: "0"
        //            };
        //            if(dur > 0){
        //                pms.sec = f.zero(dur % 60);
        //                pms.mini = Math.floor((dur / 60)) > 0? f.zero(Math.floor((dur / 60)) % 60) : "00";
        //                pms.hour = Math.floor((dur / 3600)) > 0? f.zero(Math.floor((dur / 3600)) % 24) : "00";
        //                pms.day = Math.floor((dur / 86400)) > 0? f.zero(Math.floor((dur / 86400)) % 30) : "00";
        //                //月份，以实际平均每月秒数计算
        //                pms.month = Math.floor((dur / 2629744)) > 0? f.zero(Math.floor((dur / 2629744)) % 12) : "00";
        //                //年份，按按回归年365天5时48分46秒算
        //                pms.year = Math.floor((dur / 31556926)) > 0? Math.floor((dur / 31556926)) : "0";
        //            }
        //            return pms;
        //        },
        //        ui: function(){
        //            if(o.sec){
        //                o.sec.innerHTML = f.dv().sec;
        //            }
        //            if(o.mini){
        //                o.mini.innerHTML = f.dv().mini;
        //            }
        //            if(o.hour){
        //                o.hour.innerHTML = f.dv().hour;
        //            }
        //            if(o.day){
        //                o.day.innerHTML = f.dv().day;
        //            }
        //            if(o.month){
        //                o.month.innerHTML = f.dv().month;
        //            }
        //            if(o.year){
        //                o.year.innerHTML = f.dv().year;
        //            }
        //            setTimeout(f.ui, 1000);
        //        }
        //    };
        //    f.ui();
        //};
        //
        //var zxx = {
        //    $: function(id){
        //        return document.getElementById(id);
        //    },
        //    futureDate:'',
        //    obj: function(){
        //        return {
        //            sec: zxx.$("sec"),
        //            mini: zxx.$("t_s"),
        //            hour: zxx.$("t_m"),
        //            day: zxx.$("t_h"),
        //            month: zxx.$(""),
        //            year: zxx.$("")
        //        }
        //    }
        //};

        function countDown(time, id) {
            var day_elem = $(id).find('#t_h');
            var hour_elem = $(id).find('#t_m');
            var minute_elem = $(id).find('#t_s');
            var second_elem = $(id).find('.second');
            var end_time = new Date(time).getTime(),//月份是实际月份-1
                sys_second = (end_time - new Date().getTime()) / 1000;
            var timer = setInterval(function () {
                if (sys_second > 1) {
                    sys_second -= 1;
                    var day = Math.floor((sys_second / 3600) / 24);
                    var hour = Math.floor((sys_second / 3600) % 24);
                    var minute = Math.floor((sys_second / 60) % 60);
                    var second = Math.floor(sys_second % 60);
                    day_elem && $(day_elem).text(day);//计算天
                    $(hour_elem).text(hour < 10 ? "0" + hour : hour);//计算小时
                    $(minute_elem).text(minute < 10 ? "0" + minute : minute);//计算分钟
                    $(second_elem).text(second < 10 ? "0" + second : second);//计算秒杀
                } else {
                    clearInterval(timer);
                }
            }, 1000);
        }


        if ($('body').hasClass('front')) {
            countDown("2017/11/26 7:00:00", ".time_area");
            //fnTimeCountDown(zxx.futureDate, zxx.obj());
            //setInterval(getRTime, 1000);
        }

        //var setHeight = function(){
        //    var windowH = $(window).height();
        //    $(".kvImg").css("height",windowH);
        //};
        //setHeight();
        //$(window).resize(function(){
        //    setHeight();
        //});
    });
})(jQuery);