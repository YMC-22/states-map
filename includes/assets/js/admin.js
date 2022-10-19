;
(function( $ ) {
    "use strict"

    $( document ).on('ready', function () {});

    $( window ).on( "load", function() {

        // Accordion global sections
        $(document).on('click','.ymc-sm-container-settings .header', function (e) {
            e.preventDefault();

            let _self = $(e.target);

            if(e.target.tagName === 'SPAN') {
                _self = $(e.target).closest('.header');
            }

            _self.
            toggleClass('active').
            find('.dashicons:not(.icon-theme)').
            toggleClass('active').
            end().
            next().
            toggleClass('active');

        });

        // Accordion States US
        $(document).on('click','.ymc-sm-container-settings .states-container .state .tab', function (e) {
            e.preventDefault();

            let _self = $(e.target);

            if(e.target.tagName === 'I') {
                _self = $(e.target).closest('.tab');
            }

            _self.
            toggleClass('active').
            next('.state-info').
            toggleClass('open').
            end().
            closest('.state').
            siblings('.state').
            find('.state-info').
            removeClass('open').
            end().
            find('.tab').
            removeClass('active');

        });

        // Add Color Picker for all inputs
        $('.custom-color-map').wpColorPicker();

        setTimeout(() => {
            $('.ymc-sm-container-settings .ymc-sm-overflow').removeClass('active');
        },1000);

    });

}( jQuery ));