<?php
include __DIR__.'/tmp/init.php';
include __DIR__.'/tmp/header.php';
include __DIR__.'/tmp/news_data.php';

?>

<div class="container-fluid">

    <h1 class="page-h1">Новости</h1>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 news-top-wrapper">
            <div class="top-banner news-top"></div>
            <div class="news-top-text">
                <div class="news-date">12.05</div>
                <h2 class="news-h2">Ночью тоже можно видеть</h2>
                <p>
                    Magma iOne-1000 расширяет функционал и делает</br>
                    устройство максимально удобным для пользователя.</br>
                    Рекомендованная розничная цена Magma iOne-1000</br>
                    составляет 9790 рублей, что тоже, кстати, можно</br>
                    назвать фирменной «фишкой» устройства.
                </p>
                <div class="news-more">
                    <a href="single_new.php" class="small-link">Узнать больше</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row news-block">
        <div class="news-wrapper">
            <?  $newsPerCol = 2;
                $specialNewPos = 4;
                $specialIndex = 0;
                include __DIR__.'/tmp/news_block_templ.php';
            ?>
        </div>
    </div>

    <section class="news-footer">
        <div class="tc">
            <div class="td">
                    <div class="catalog-footer-text news-footer-text">
                        <span class="name">Magma WIDE S50 </span><span class="text">теперь</br>
                            доступен и в Екатериинбурге.</span></br>
                        <a href="#" class="btn btn-grey buynow">купить сейчас</a>
                    </div>
            </div>
        </div>
    </section>

    <div class="row news-block">
        <div class="news-wrapper">
            <?  $newsPerCol = 1;
                $specialNewPos = 0;
                $specialIndex = 1;
            include __DIR__.'/tmp/news_block_templ.php';
            ?>
        </div>
    </div>
    
    <div class="news-pager-wrapper">
        <div class="simple-pager">
            <ul class="pager-menu">
                <li class="pager-menu-item"><a href="#" class="arrow-left"></a></li>
                <li class="pager-menu-item"><a href="#">1</a></li>
                <li class="pager-menu-item"><a href="#">2</a></li>
                <li class="pager-menu-item"><a href="#">3</a></li>
                <li class="pager-menu-item">...</li>
                <li class="pager-menu-item"><a href="#">12</a></li>
                <li class="pager-menu-item"><a href="#" class="arrow-right"></a></li>
            </ul>
        </div>
    </div>
    

    

</div>


<?php include __DIR__.'/tmp/footer.php'?>
