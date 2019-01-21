(function($){
    // gnb 관련
    $(document).on('mouseenter focus', '#gnb-nav > ul > li', function(){
        $('body').addClass('opened');
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
    });
    $(document).on('mouseleave','#header', function(){
        $('body').removeClass('opened');
    });
    $(document).on('mouseleave','#gnb-nav > ul > li', function(){
        $(this).removeClass('active');
    });

    // partner 관련
    $(document).ready(function(){
        $('.partner-list').slick({
            dots: false,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 6000,
            nextArrow: '<button type="button" class="btn btn-prev"><i class="icon-left-open"></i></button>',
            prevArrow: '<button type="button" class="btn btn-next"><i class="icon-right-open"></i></button>'
        });
    });
    
    // search 관련
    $(document).on('click', '.search-open', function(){
        $('.form-group').removeClass('d-none');
        $('.search-area').addClass('on');
    });
    $(document).on('click', '.search-close', function(){
        $('.form-group').addClass('d-none');
        $('.search-area').removeClass('on');
    });
    
    
    // 퀵탑 관련
    $(window).on('scroll', function(){
        if ($(this).scrollTop() > 0) {
            $('body').addClass('scrolled');
        } else {
            $('body').removeClass('scrolled');
        }
    });
    $(document).on('click', '.quick-top .btn-top', function(e) {
        $('html, body').stop().animate({
            scrollTop: 0
        });
        e.preventDefault();
    });
})(jQuery);