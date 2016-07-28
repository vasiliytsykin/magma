<?php
include __DIR__.'/tmp/init.php';
include __DIR__.'/tmp/header.php'
?>

<div class="container-fluid">

    <h1 class="about-h1">О компании</h1>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 top-banner about-top"></div>
    </div>
    <div class="row row-about-text">
        <div class="col-lg-6 col-md-10 col-sm-10 col-xs-12 about-text">
            <h2 class="about-h2">Magma — один из лидеров на рынке</h2>
            <p class="about">
                В апреле 2011 года был подписан внешнеэкономический договор о сотрудничестве,
                совместном производстве и эксклюзивной дистрибуции с международной компаний Oitez.
                В середине 2011 года компания Magma участвует в международной выставке Automechanika Moscow 2011,
                где проходит первая презентация новых моделей серии Mobile-i.
            </p>
            <p class="about ione">
                Magma iOne-1000 расширяет функционал и делает устройство максимально удобным для пользователя.
                Рекомендованная розничная цена Magma iOne-1000 составляет 9790 рублей,
                что тоже, кстати, можно назвать фирменной «фишкой» устройства.
            </p>
        </div>
    </div>

    <?
        $videoText = 'Сейчас Magma — один из лидеров на рынке высокотехнологичной продукции в России.';
        include __DIR__.'/tmp/video_block_templ.php'

    ?>
    
    <div class="row row-about-text row-about-text-bottom">
        <div class="col-lg-6 col-md-10 col-sm-10 col-xs-12 about-text">
            <p class="about">
                В апреле 2011 года был подписан внешнеэкономический договор о сотрудничестве,
                совместном производстве и эксклюзивной дистрибуции с международной компаний Oitez.
                В середине 2011 года компания Magma участвует в международной выставке Automechanika Moscow 2011,
                где проходит первая презентация новых моделей серии Mobile-i.
            </p>
            <p class="about ione">
                Magma iOne-1000 расширяет функционал и делает устройство максимально удобным для пользователя.
                Рекомендованная розничная цена Magma iOne-1000 составляет 9790 рублей,
                что тоже, кстати, можно назвать фирменной «фишкой» устройства.
            </p>

            <div class="about-contact-info">
                <p class="about-contact-info-top">Мы всегда на связи!</br>Звоните, пишите нам!</p>
                <p class="about-contact-info-bottom">8 800 677 56 56</br>magma@info.ru</p>
            </div>

            <div class="about-go-to-catalog">
                <a href="#" class="small-link">Перейти в каталог</a>
            </div>
            
            <div class="cb"></div>
        </div>
    </div>

</div>


<?php include __DIR__.'/tmp/footer.php'?>
