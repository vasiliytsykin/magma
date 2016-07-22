<?php
include __DIR__.'/tmp/init.php';
include __DIR__.'/tmp/header.php'
?>

<div class="container-fluid">

    <h1 class="page-h1">Новости</h1>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 top-banner news-top">
            <div class="img-on-top"></div>
        </div>
    </div>

    <div class="row news-block">
        <div class="container-fluid">
        
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-left">
                    <a href="#">
                        <div class="news-item">
                            <div class="m-cat-img news-img" style="background-image: url('/img/car-big.jpg')"></div>
                            <div class="m-cat-desc news-desc">
                                <div class="news-date">11.04</div>
                                Как избежать проблем с установкой
                                видеорегистратора.</br>
                                Советы от наших блогеров
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="news-item"></div>
                    </a>
                </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-mid">
                    <a href="#">
                        <div class="news-item">
                            <div class="m-cat-img news-img" style="background-image: url('/img/car-big.jpg')"></div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="news-item"></div>
                    </a>
                </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-right">
                    <a href="#">
                        <div class="news-item">
                            <div class="m-cat-img news-img" style="background-image: url('/img/car-big.jpg')"></div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="news-item"></div>
                    </a>
                </div>
        
        </div>
    </div>
    <div class="cb"></div>

    <a class="back-on-top"><img src="img/back-on-top.png"></a>
    <div class="back-on-top-static"></div>

</div>


<?php include __DIR__.'/tmp/footer.php'?>
