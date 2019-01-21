(function($){
    // 메인 비주얼 관련
    $(document).ready(function(){
        setTimeout(function(){
            $(".jumbotron").addClass("action");
        }, 1000);
    });
    $(document).ready(function(){
        setTimeout(function(){
            $(".slogan").animate({
                opacity: '0'
            });
        }, 5700);
        setTimeout(function(){
            $(".slogan").animate({
                opacity: '1'
            });
        }, 5900);
    });

    // 포트폴리오 관련
    $(document).ready(function(){
        $('.portfolio-list').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            asNavFor: '.portfolio-nav',
            nextArrow: '<button type="button" class="btn btn-prev"><i class="icon-left-open"></i></button>',
            prevArrow: '<button type="button" class="btn btn-next"><i class="icon-right-open"></i></button>'
        });
        $('.portfolio-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.portfolio-list',
            dots: false,
            arrows: false,
            //centerMode: true,
            vertical: true,
            focusOnSelect: true,
            verticalSwiping: true,
        });
    });
})(jQuery);