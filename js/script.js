$(document).ready(function () {

    $('select').selectric();

});

$(document).ready(function() {

        $('.owl-carousel').owlCarousel({
        items: 1,
        loop:true,
    })
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
                if($(window).width() > 768){

                    if ($(this).scrollTop() > offset) {
                        $(selector).fadeIn(duration);
                    } else {
                        $(selector).fadeOut(duration);
                    }
                }
                else{
                    $(selector).hide();
                }
            });
        }
    }

    onTopDynamic(500, 500, '.back-on-top');

    $('.back-on-top, .back-on-top-static').on('click', function(event) {
        onTop(event, 500);
    })
});


$(document).ready(function() {

    function setSpecialNewsHeight()
    {
        var h=0, $news = $(".news-item");
        $news.css({ minHeight:0});
        $news.each(function(ind, el){
            h=(h < $(el).height()?$(el).height():h);
        });

        $news.css({'minHeight': h});
        $('.news-special').css({'minHeight': h});
    }

    $(window).resize(function () {
        setSpecialNewsHeight();
    }).resize();
});