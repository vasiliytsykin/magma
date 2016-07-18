$(document).ready(function () {

    $('select').selectric();

});

jQuery(document).ready(function() {
    var offset = 500;
    var duration = 500;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-on-top').fadeIn(duration);
        } else {
            jQuery('.back-on-top').fadeOut(duration);
        }
    });

    jQuery('.back-on-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    })
});