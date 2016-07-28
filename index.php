<?php
/**
 * Created by PhpStorm.
 * User: Валерий
 * Date: 01.06.2016
 * Time: 11:50
 */


include __DIR__.'/tmp/init.php';


include __DIR__.'/tmp/header.php';?>


    <div class="main-slider">


        <div class="main-slider-over">

            <div class="main-slide" style="background-image:url(img/element.svg);">
                <div class="tc"><div class="td">
                        <div class="mm">
                            <div class="main-slide-text">
                                <div class="t-desc">ВИДЕОРЕГИСТРАТОР  iReg-7570SHD</div>
                                <h2><b>Ваше внимание</b> посвящено<br/>
                                    только дороге.</h2>

                                <div class="b-btn"><a href="#" class="btn btn-white">купить сейчас</a></div>
                            </div>
                        </div></div>
                </div>
            </div>
        </div>

        <div class="owl-carousel">
            <div class="item"><img src="img/carousel-img-1.png"></div>
            <div class="item"><img src="img/carousel-img-1.png"></div>
            <div class="item"><img src="img/carousel-img-1.png"></div>
        </div>

    </div>


<? $arResult = array(
    'ITEMS'=>array(
        array(
            'NAME'=>'Ночью тоже можно видеть','DETAIL_PAGE_URL'=>'new.php','PREVIEW_PICTURE'=>'/img/new1.jpg','ACTIVE_FROM'=>'12.05','PREVIEW_TEXT'=>' Magma iOne-1000 расширяет функционал и&nbsp;делает устройство максимально удобным для&nbsp;пользователя.'
        ),
        array(
            'NAME'=>'Новейшая разработка запущена в&nbsp;продажу Встречайте Magma iOne-1000!','DETAIL_PAGE_URL'=>'new.php','PREVIEW_PICTURE'=>'/img/new2.png','ACTIVE_FROM'=>'12.05','PREVIEW_TEXT'=>''
        ),
        array(
            'NAME'=>'Разрешение у&nbsp;видеорегистратора стало ещё лучше','DETAIL_PAGE_URL'=>'new.php','PREVIEW_PICTURE'=>'/img/new3.png','ACTIVE_FROM'=>'12.05','PREVIEW_TEXT'=>'Magma iOne-1000 расширяет функционал и&nbsp;делает устройство максимально удобным для&nbsp;пользователя'
        ),
    )
);?>
    <div class="colarea main-news-list">
        <? foreach($arResult['ITEMS'] as $arItem){?><div class="new-item">
            <a href="<?=$arItem['DETAIL_PAGE_URL'];?>">
                <div class="new-item-over">
                    <div class="new-img" style="background-image: url(<?=$arItem['PREVIEW_PICTURE'];?>);"></div>
                    <div class="new-text">
                        <div class="new-date"><?=$arItem['ACTIVE_FROM'];?></div>
                        <h3><?=$arItem['NAME'];?></h3>
                        <div class="new-desc"><?=$arItem['PREVIEW_TEXT'];?></div>
                    </div>
                </div>
            </a>
        </div><?}?>
    </div>
    <div class="t-center"><a href="#" class="btn not-bg c-black">Перейти ко все новостям</a></div>

<? $arResult = array(
    'ITEMS'=>array(
        array('NAME'=>'Гибриды','PREVIEW_PICTURE'=>'/img/product1.png','PREVIEW_TEXT'=>'товар года'),
        array('NAME'=>'Видеорегистраторы','PREVIEW_PICTURE'=>'/img/product2.png','PREVIEW_TEXT'=>'-20% при покупке двух' ),
        array('NAME'=>'Радар-детекторы','PREVIEW_PICTURE'=>'/img/product3.png','PREVIEW_TEXT'=>'от 1000 руб.' ),
        array('NAME'=>'Системы парковки','PREVIEW_PICTURE'=>'/img/product4.png','PREVIEW_TEXT'=>'товар месяца'),
        array('NAME'=>'Видеорегистраторы','PREVIEW_PICTURE'=>'/img/product1.png','PREVIEW_TEXT'=>'-20% при покупке двух' ),
        array('NAME'=>'Радар-детекторы','PREVIEW_PICTURE'=>'/img/product2.png','PREVIEW_TEXT'=>'от 1000 руб.' ),
    )
);?>
<div class="main-catalog-over">
    <div class="colarea">
        <? foreach($arResult['ITEMS'] as $arItem){?><div class="m-catalog-item col3">
            <div class="m-catlog-item-over">
                <div class="m-cat-img" style="background-image: url(<?=$arItem['PREVIEW_PICTURE'];?>);"></div>
                <div class="m-cat-text">
                    <h3><?=$arItem['NAME'];?></h3>
                    <div class="m-cat-desc"><?=$arItem['PREVIEW_TEXT'];?></div>
                </div>
            </div>
            </div><?}?>

    </div>

</div>


<? include __DIR__.'/tmp/footer.php';