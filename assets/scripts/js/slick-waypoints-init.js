jQuery(document).ready(function ($) {

    $('[data-waypoint]').each(function () {
        var $element = $(this);
        var wpOffset = $element.data('waypoint-offset');
        var wpDirection = $element.data('waypoint-direction');
        var wpClass = $element.data('waypoint-class');

        $element.waypoint(function (direction) {
            if(direction==wpDirection) {
                if(!$element.hasClass(wpClass)) {
                    $element.addClass(wpClass);
                }
            }
            this.destroy();
        }, {
            offset: wpOffset
        });
    });

    $('[data-slick-slider]').slick();

    $('.slick-button').click(function (e) {
        e.preventDefault();
        var slide = $(this).data('slide');
        var slider = $(this).data('slider-id');
        /*var currentSlide = $('#'+slider).slick('slickCurrentSlide');
        window.console.log('slide = ' + slide);
        window.console.log('currentSlide = ' + currentSlide);*/

        $('#'+slider).slick('slickGoTo',parseInt(slide));
    });

});