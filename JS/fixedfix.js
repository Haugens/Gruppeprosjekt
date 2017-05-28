$(document).ready(function() {
    var height = $("#menybar").height();
    if(height > 0)
    {
        $("#calendar_container").css("margin-top",height-10);
    }
});

$(window).resize(function() {
    var height = $("#menybar").height();
    if(height > 0)
    {
        $("#calendar_container").css("margin-top",height-10);
    }
});

