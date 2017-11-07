function setCarousel() {

    var carouselHeight = $("body").height();
    $('.carousel-container .item').css({
        'height': carouselHeight + "px"
    });
}




$(document).ready(function() {
    setCarousel();
    $('ul.menu').each(function() {
        $(this).find('li:last-child').after('');
    });
});

$(window).resize(function() {
    setCarousel();

});

$(document).on("click", ".smedia-share", function(e) {
    //alert('item');
    $(this).parent().parent('ul').toggleClass('opened');
});

var header = $('.carousel-caption, .carousel-indicators, .carousel-control');
var range = 1200;
//alert('item');
$(document).on('scroll', function() {

    var scrollTop = $(this).scrollTop();
    var offset = header.offset().top;
    var height = header.outerHeight();
    offset = offset + height / 2;
    var calc = 1 - (scrollTop - offset + range) / range;

    header.css({
        'opacity': calc
    });

    if (calc > '1') {
        header.css({
            'opacity': 1
        });
    } else if (calc < '0') {
        header.css({
            'opacity': 0
        });
    }

});


(function($) {

    //Function to animate slider captions 
    function doAnimations(elems) {
        //Cache the animationend event in a variable
        var animEndEv = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

        elems.each(function() {
            var $this = $(this),
                $animationType = $this.data('animation');
            $this.addClass($animationType).one(animEndEv, function() {
                $this.removeClass($animationType);
            });
        });
    }

    //Variables on page load 
    var $myCarousel = $('#carousel-example-generic'),
        $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

    //Initialize carousel 
    $myCarousel.carousel({
        interval: false
    });

    //Animate captions in first slide on page load 
    doAnimations($firstAnimatingElems);

    //Pause carousel  
    $myCarousel.carousel('pause');


    //Other slides to be animated on carousel slide event 
    $myCarousel.on('slide.bs.carousel', function(e) {
        var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
        doAnimations($animatingElems);
    });

})(jQuery);