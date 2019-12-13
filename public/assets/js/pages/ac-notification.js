'use strict';

$(window).on('load', function() {
    function click(id)
    {
        var element = document.getElementById(id);
        if(element.click)
            element.click();
        else if(document.createEvent)
        {
            var eventObj = document.createEvent('MouseEvents');
            eventObj.initEvent('click',true,true);
            element.dispatchEvent(eventObj);
        }
    }
    click('notification');
});

$(document).ready(function() {
    function notify(from, align, icon, type, animIn, animOut, message) {
        $.notify({
            icon: icon,
            message: message,
            url: ''
        }, {
            element: 'body',
            type: type,
            allow_dismiss: true,
            placement: {
                from: from,
                align: align
            },
            offset: {
                x: 30,
                y: 30
            },
            spacing: 10,
            z_index: 999999,
            delay: 2500,
            timer: 1000,
            url_target: '_blank',
            mouse_over: false,
            animate: {
                enter: animIn,
                exit: animOut
            },
            icon_type: 'class',
				template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
							'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
							'<span data-notify="icon"></span> ' +
							'<span data-notify="title">{1}</span> ' +
							'<span data-notify="message">{2}</span>' +
							'<div class="progress" data-notify="progressbar">' +
								'<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
							'</div>' +
							'<a href="{3}" target="{4}" data-notify="url"></a>' +
						'</div>'
        });
    };
    // [ notification-button ]
    $('#notification').on('click', function(e) {
        e.preventDefault();
        var nFrom = $(this).attr('data-from');
        var nAlign = $(this).attr('data-align');
        var nIcons = $(this).attr('data-notify-icon');
        var nType = $(this).attr('data-type');
        var nAnimIn = $(this).attr('data-animation-in');
        var nAnimOut = $(this).attr('data-animation-out');
        var message =  $(this).attr('value');
        notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut, message);
    });
});
