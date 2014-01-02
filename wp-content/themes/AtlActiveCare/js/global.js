(function($){
    $('document').ready(function(){
        // if(window.location.hash.length > 0 && $('body').attr('class').split(" ")[1] == "page-id-9"){
        if(window.location.hash.length > 0) {
            var id = window.location.hash;
            var $elem = $('a[href="'+ id +'"]', '#servicesGrid, #providersGrid');
            window.setTimeout(function($elem){
                $elem.trigger('click');
            }, 500, $elem);
        }
        //Services Lightbox / Rotation
        $('#servicesGrid li a, .grid li a').on('click', function(e){
            e.preventDefault();
            var selector    =  $(this).attr('href');

            $(selector + ', #shade, #grid-content').fadeIn(100, function(){
                $(selector).addClass('active');

                var height      =  $(window).outerHeight() + $('#grid-content').outerHeight();
                var width       = $(window).outerWidth();
                     console.log('height', height);

                     $('#content-wrapper').height(height);
                $('#shade').height(height + 100).width(width);
                debugger;
            });
        });
        $('a.close').on('click', function(e){
            e.preventDefault();
            var selector    = '#' + $(e.target).parent().attr('id');
            var offset      =  (Number($(selector).css('margin-left').split('px')[0]) - $(selector).outerWidth()) + 'px';

            rotateOffScreen(selector, offset);
        });
        function rotateOffScreen(selector, offset){
                //$(selector).css('marginLeft', offset);
                $(selector).fadeOut(100, function(){
                    $(selector).removeClass('active').removeAttr('style');
                    $('#shade, #grid-content').fadeOut(100);
                });
                // $(selector).stop().animate({
                //     transform: '-90'
                // },
                // {
                //     duration: 300,
                //     step: function(now, fx) {
                //         $(this).css("transform", "rotate(" + now +"deg)");
                //         $(this).css("-webkit-transform", "rotate(" + now +"deg)");
                //         $(this).css("-moz-transform", "rotate(" + now +"deg)");
                //         $(this).css("-ms-transform", "rotate(" + now +"deg)");
                //     },
                //     complete: function(){
                //         $(this).removeAttr('class').removeAttr('style');
                //         $('#shade, #grid-content').fadeOut(100);
                //     }
                //   }, 'swing');
        }

        //Geolocation
        var navId, lattitude, longitude;
        function getLocation(){
            if (navigator.geolocation) {
                var a = $('a#location');
                var optn = {
                    enableHighAccuracy : true,
                    timeout : Infinity,
                    maximumAge : 0
                };

                watchId = navigator.geolocation.watchPosition(showPosition, showError, optn);
            } else {
                alert('Geolocation is not supported in your browser');
            }
        }
        function stopWatch(){
        if (navId) {
            navigator.geolocation.clearWatch(navId);
            navId = null;
        }
        }
        function showPosition(position) {
        lattitude = position.coords.latitude;
        longitude = position.coords.longitude;
        var ua = navigator.userAgent.toLowerCase();
        var isAndroid = ua.indexOf("android") > -1; //&& ua.indexOf("mobile");
        var location = '';
        if(isAndroid || (navigator.platform.toLowerCase().indexOf('win') > -1)) {
            location = 'https://maps.google.com/maps?q=Duluth+Diner,+Peachtree+Industrial+Boulevard,+Duluth,+GA&hl=en&ll=33.999842,-84.16714&spn=0.011118,0.019205&sll='+longitude+','+lattitude;

        } else {
            location = 'maps:ll='+ lattitude + ',' + longitude;
        }
        $('#location').attr('href', location);
        }
        function showError(error) {
        switch(error.code) {
            case error.PERMISSION_DENIED:
                alert("User denied the request for Geolocation.");
                break;
            case error.POSITION_UNAVAILABLE:
                alert("Location information is unavailable.");
                break;
            case error.TIMEOUT:
                alert("The request to get user location timed out.");
                break;
            case error.UNKNOWN_ERROR:
                alert("An unknown error occurred.");
                break;
        }
        }
        getLocation();

        //Testimonial
        $('.readMore').on('click', function(e){
            e.preventDefault();
            $(this).parent().parent().find('.more').slideToggle(100)
        });

        //Gallery
        $('#gallery-nav li a').on('click', function(e){
            e.preventDefault();
            var target = $(e.target).attr('href');
            $('.block', '#gallery #content').fadeOut(100, function(){
                $(target, '#gallery #content').fadeIn(100);
            }).removeAttr('style');
        });

        if($('#content ul').length > 0) {
            $('#content ul li a').fancybox();
        }
    });
}(jQuery));