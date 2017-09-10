$(document).ready(function() {
    // This will fire when document is ready:
    $(window).resize(function() {
        // This will fire each time the window is resized:
        if($(window).width() >= 768) {
            // if larger or equal
            $("ul").removeClass("nav-stacked");
        } else {
            // if smaller
            $("ul").addClass("nav-stacked");
        }
    }).resize(); // This will simulate a resize to trigger the initial run.
});