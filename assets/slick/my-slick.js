
$(document).ready(function(){
  
    /* -------------------------------------------------------------------------- */
    /*                               Context slider                               */
    /* -------------------------------------------------------------------------- */
    $('.slick-slider-context').slick({
        dots: false,
        autoplay: true,
        autoplaySpeed: 4000,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
            breakpoint: 2500,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: true
            }
            },
            {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true
            }
            },
            {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
            },
            {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            }
        ]
    });   
    
    /* -------------------------------------------------------------------------- */
    /*                             With thanks slider                             */
    /* -------------------------------------------------------------------------- */
    $('.slick-slider-thanks').slick({
        dots: false,
        autoplay: true,
        autoplaySpeed: 4000,
        infinite: true,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [
            {
            breakpoint: 2500,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 1,
                infinite: true
            }
            },
            {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true
            }
            },
            {
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
            },
            {
            breakpoint: 576,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
            }
        ]
    });    

    /* -------------------------------------------------------------------------- */
    /*                           Grant Recipients Slider                          */
    /* -------------------------------------------------------------------------- */
    $('.slick-slider-recipients').slick({
        dots: false,
        autoplay: true,
        autoplaySpeed: 4000,
        infinite: true,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [
            {
            breakpoint: 2500,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 1,
                infinite: true
            }
            },
            {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true
            }
            },
            {
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
            },
            {
            breakpoint: 576,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
            }
        ]
    });    

});




    
