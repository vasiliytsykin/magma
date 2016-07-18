<?php
$extraClass = '';
if(!empty($arProductInfo[$j%2]['new']))
    $extraClass = $arProductInfo[$j%2]['new'];
if(!empty($arProductInfo[$j%2]['discount']))
    $extraClass = $arProductInfo[$j%2]['discount'];?>
<div class="m-catalog-item col4 <?=$extraClass;?>">
    <a href="#" class="compare"><img src="img/svg_compare-01.svg"></a>
    <a href="#" class="cart"><img src="img/basket.svg"></a>
    <a href="#">
        <div class="m-catalog-item-over">
            <div class="m-cat-img" style="background-image: url(<?=$arProductImg[$j];?>)"></div>
            <div class="m-cat-text">
                <h3 class="product-name"><?=$arProductInfo[$j%2]['name'];?></h3>
                <h3 class="price"><?=$arProductInfo[$j%2]['price'];?></h3>
                <div class="m-cat-desc nolower"><?=$arProductInfo[$j%2]['desc1'];?></div>
            </div>
        </div>
    </a>
</div>