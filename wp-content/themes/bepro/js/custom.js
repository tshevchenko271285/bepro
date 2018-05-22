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
        nav: true,
        dots: false,
        navText: [
            '<i class="ion-ios-arrow-thin-left"></i>',
            '<i class="ion-ios-arrow-thin-right"></i>',
        ]
    });
});

/*
**  Ajax Loader Products On Home Page
 */
$(function(){
    var btn = $('#homeProductsAdd'),
        row = $('#homeProductsRow'),
        count = row.find('.home-products_item').length;
    btn.on('click', function(){
        $.ajax({
            method: "POST",
            url: ajaxurl,
            data: { action: "home_products", offset: count },
        }).done(function( msg ) {
            row.append(msg);
        });
    });
});

/*
**  Init Slider Events
 */
$(function(){
    $('#eventsSlider').owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        dots: true,
        navText: [
            '<i class="fal fa-angle-left"></i>',
            '<i class="fal fa-angle-right"></i>',
        ]
    });
});