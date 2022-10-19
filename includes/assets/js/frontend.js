;
(function( $ ) {
    "use strict"

    $(document).on('ready', function () {

        document.querySelectorAll('.ymc-states-map').forEach((el) => {

            // Get svg
            let svg = $(el).find('svg');

           // Open popup & load info
            svg.on('click', function (e) {

                if( e.target.tagName === 'path' || e.target.tagName === 'tspan') {

                    let popup = $(el).find('.ymc-popup');

                    $(el).find('.ymc-overlay').fadeIn();
                    popup.fadeIn().addClass('open');

                    let stateCode = '';
                    let postId = $(el).data('postid');
                    let statusBtn = $(el).data('btnstatus');

                    switch ( e.target.tagName ) {
                        case "path" :
                            stateCode = $(e.target).data('id');
                            break;
                        case "tspan" :
                            stateCode = $(e.target).text();
                            break;
                    }

                    // Ajax request (load content state)
                    const data = {
                        'action': 'get_state',
                        'nonce_code' : _ymc_sm_object.nonce,
                        'state_code' : stateCode.toLowerCase().trim(),
                        'post_id'    : postId
                    };

                    $.ajax({
                        type: 'POST',
                        dataType: 'json',
                        url: _ymc_sm_object.ajax_url,
                        data: data,
                        beforeSend: function () {
                            popup.find('.header').hide();
                            popup.append(`<img class="preloader" src="${_ymc_sm_object.path}/includes/assets/images/Loading_icon.gif">`).
                            find('.container').css({'opacity':'0'});
                        },
                        success: function (res) {

                            popup.find('.header').html(`${res.title}`);
                            popup.find('.text').html(`${res.text}`);
                            popup.find('.header').show();
                            popup.find('.container').css({'opacity':'1'}).end().find('.preloader').remove();
                            popup.find('.btn').attr('href',res.link);

                            if(statusBtn === "off") {
                                popup.find('.btn').hide();
                            }
                        },
                        error: function (obj, err) {
                            console.log( obj, err );
                        }
                    });
                }
            });

            // Close popup
            $('body').on('click', function (e) {
                if( !e.target.closest('.ymc-popup') && !e.target.closest('svg') ) {
                    $(el).find('.ymc-overlay').hide();
                    $(el).find('.ymc-popup').hide().removeClass('open');
                }
            });

            $(el).find('.ymc-popup .close').on('click', function (e) {
                $(el).find('.ymc-overlay').hide();
                $(el).find('.ymc-popup').hide().removeClass('open');
            });

            // Tooltip
            let tooltip = $(el).find('.ymc-tooltip');

            // Get colors
            let bgHoverColor = $(el).data('bghcolor');
            let bgColor = $(el).data('bgcolor');
            let bgTooltip = $(el).data('bgtooltip');
            let colorTooltip = $(el).data('colortooltip');

            // Hover
            svg.find('path').hover(
                function (e) {
                    $(this).css({'fill':`${bgHoverColor}`});
                    let name = $(this).data('name');
                    let code = $(this).data('id');

                    tooltip.
                    css({ left: e.pageX, top: e.pageY - window.scrollY - 70, backgroundColor: bgTooltip, color: colorTooltip }).
                    addClass('active').
                    html(`<span>${name} [${code}]</span>`);
                },
                function (e) {
                    tooltip.removeClass('active').empty();
                    $(this).css({'fill':`${bgColor}`});
                },
            );

            svg.find('rect, tspan').hover(
                function (e) {
                    let _self = $(e.target);
                    if(e.target.tagName === 'tspan') {
                        _self = $(e.target).closest('text').prev();
                    }
                    _self.attr({'fill':`${bgHoverColor}`});
                },
                function (e) {
                    let _self = $(e.target);
                    if(e.target.tagName === 'tspan') {
                        _self = $(e.target).closest('text').prev();
                    }
                    _self.attr({'fill':`${bgColor}`});
                },
            );

            // Bg. color states
            svg.find('path').attr('fill',`${bgColor}`);
            svg.find('rect').attr('fill',`${bgColor}`);

        });

    });

}( jQuery ));