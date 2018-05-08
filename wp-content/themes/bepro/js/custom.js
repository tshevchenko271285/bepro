/*
**  Header Menu Opened
 */
$(function(){
    if( !$('.header_boorger').length ) return ;
    $('.header_boorger').on('click', function(){
        $('.header_menu').toggleClass('header_menu__open');
        $('.header_menu-outer').toggleClass('header_menu-outer__open');
    });
    $('.header_menu-outer').on('click', function(){
        $('.header_menu').toggleClass('header_menu__open');
        $('.header_menu-outer').toggleClass('header_menu-outer__open');
    });
});

/*
**  Init Slider Banner HomePage
 */
$(function(){
    $('#bannerSliderHome').owlCarousel({
        items: 1,
        //loop: true,
        nav: true,
        navText: [
            '<i class="ion-ios-arrow-thin-left"></i>',
            '<i class="ion-ios-arrow-thin-right"></i>',
        ]
    });
});
