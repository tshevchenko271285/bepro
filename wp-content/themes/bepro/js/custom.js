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
        count;
    btn.on('click', function(){
        count = row.find('.home-products_item').length;
        $.ajax({
            method: "POST",
            url: ajaxurl,
            data: { action: "home_products", offset: count },
        }).done(function( msg ) {
            row.append(msg);
            count = row.find('.home-products_item').length;
            if( row.data('products') == count ) {
                btn.off('click').addClass('home-products_add-row__disabled');
            }
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

/*
**  Init Slider Logotypes
 */
$(function(){
    $('#logotypesSlider').owlCarousel({
        items: 1,
        loop: true,
        nav: false,
        dots: false,
        navText: [
            '<i class="fal fa-angle-left"></i>',
            '<i class="fal fa-angle-right"></i>',
        ],
        responsive : {
            1200 : {
                items: 4,
                nav: true,
            },
            991 : {
                items: 3,
                nav: true,
            },
            575 : {
                items: 2,
            }
        },

    });
});


/*
**  Init Slider Popular Posts
 */
$(function(){
    var slider = $('#popularPostsSlider');
    slider.owlCarousel({
        items: 1,
        margin: 10,
        loop: true,
        nav: false,
        dots: false,
    });
    // Override Next Button
    $('#popularPostNext').on('click', function(){
        slider.find('.owl-next').click();
    });
    // Override Prev Button
    $('#popularPostPrev').on('click', function(){
        slider.find('.owl-prev').click();
    });
});

