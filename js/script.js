$(function() {
    $.each($('[data-toggle="popover"]'), function(i, val) {
        var id = $(val).attr("id");
        if (id != undefined) {
            var html = $("." + id).html();
            $(val).popover({
                'trigger': 'focus',
                'placement': 'bottom',
                'content': html,
                'html': true
            });
        }
    });
})