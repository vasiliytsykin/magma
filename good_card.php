<?php
    include __DIR__.'/tmp/init.php';
    include __DIR__.'/tmp/header.php';
    include __DIR__.'/tmp/good_card_data.php';
    include __DIR__.'/tmp/catalog_data.php';
?>


    <div class="container-fluid">

        <section class="row main-description">
            
            
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 main-description-text">
                <h1>Magma WIDE S47 DUAL</h1>
                <div class="secondary-text">
                    <span>Цифровой видеорегистратор</span>
                    <span> ·  </span>
                    <span>арт. 567456</span>
                </div>
                <div class="price good-card-price">3000 руб.</div>
                
                
                <? include __DIR__.'/tmp/photo_gallery_templ.php';?>
                
                <div class="good-card-buttons">
                    <a href="#" class="btn">купить<div class="cart-white"></div></a>
                    <a href="#" class="btn btn-gray">сравнить<div class="compare-gray"></div></a>
                </div>

                <div class="good-properties">
                    <h3>Основные характеристики</h3>
                    <? foreach ($arProperties as $prop) {?>
                    <div class="property-wrapper">
                        <div class="property-name">
                            <span class="property-name-inner"><?=$prop['name']?></span>
                        </div>
                        <div class="property-value">
                            <span class="property-value-inner"><?=$prop['value']?></span>
                        </div>
                    </div>
                    <?}?>
                </div>

            </div>
        </section>

        <section class="row tech-specs">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 video-container">
                


                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 tech-specs-text">
                    <h3>Преимущества</h3>
                    <p>
                        Magma iOne-1000 расширяет функционал и делает устройство максимально удобным для пользователя.
                        Magma iOne-1000 расширяет функционал и делает устройство максимально удобным для пользователя.
                    </p>
                    <div class="good-properties">
                        <h3>Технические характеристики</h3>
                        <? foreach ($arProperties as $prop) {?>
                            <div class="property-wrapper">
                                <div class="property-name">
                                    <span class="property-name-inner"><?=$prop['name']?></span>
                                </div>
                                <div class="property-value">
                                    <span class="property-value-inner"><?=$prop['value']?></span>
                                </div>
                            </div>
                        <?}?>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 video-wrapper">
                    <div class="video" style="background-image: url('/img/video.jpg');"></div>
                </div>

            </div>

        </section>

        <section class="row extra-offer colarea">
            <h4>Вам могут быть интересны</h4>
            <? for ($j = 0; $j<4; $j++)
                include __DIR__.'/tmp/product_templ.php';
            ?>
        </section>

    </div>


<? include __DIR__.'/tmp/footer.php';
