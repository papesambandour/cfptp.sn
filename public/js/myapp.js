
    var len = $('.imgslide').length;
    var current = 0;
    var idslide ;
    var idArrowVisible ;

    function slideImg() {


        idslide = setInterval(function () {
            $('.imgslide').removeClass('active');
            $('.imgslide').eq(current = (current == len - 1) ? 0 : current + 1).addClass('active');
        }, 5000)
    }
    slideImg()
    function ClickArrowRight() {
        clearInterval(idslide)

        $('.imgslide').removeClass('active');
        $('.imgslide').eq(current = (current == len - 1) ? 0 : current + 1).addClass('active');
        slideImg()
    }

    function ClickArrowLelf() {
        clearInterval(idslide)

        $('.imgslide').removeClass('active');
        $('.imgslide').eq(current = (current == 0) ? len - 1 : current - 1).addClass('active');
        slideImg()
    }

  hideArrow() ;
    function showArrow() {
        $('.slideImgContainer').on('mousemove',function () {

            if(idArrowVisible != undefined)
            {
                clearTimeout(idArrowVisible)
            }
            $('.arrowSlideLeft').fadeIn();
            $('.arrowSlideRight').fadeIn();
            idArrowVisible = setTimeout(function () {
                $('.arrowSlideLeft').fadeOut();
                $('.arrowSlideRight').fadeOut();
            },1000);

        });
    }

showArrow();
    function hideArrow() {

        $('.arrowSlideLeft').hide();
        $('.arrowSlideRight').hide();
    }
