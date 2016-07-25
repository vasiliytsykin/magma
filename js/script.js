$(document).ready(function () {

    $('select').selectric();

});

$(document).ready(function() {

    function onTop(event, duration) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, duration);
        return false;
    }

    function onTopDynamic(offset, duration, selector) {

        if(offset != null && duration != null)
        {
            $(window).scroll(function() {
                if ($(this).scrollTop() > offset) {
                    $(selector).fadeIn(duration);
                } else {
                    $(selector).fadeOut(duration);
                }
            });
        }

        $(selector).on('click', function(event) {
            onTop(event, duration);
        })
    }

    onTopDynamic(500, 500, '.back-on-top');
    onTopDynamic(null, 500, '.back-on-top-static');

});


$(document).ready(function() {

    function setSpecialNewsHeight()
    {
        var h = $(".news-item").first().height() + 'px';
        $('.news-special').css('height', h);
    }

    setSpecialNewsHeight();

    $(window).resize(function () {
        setSpecialNewsHeight();
    })
});