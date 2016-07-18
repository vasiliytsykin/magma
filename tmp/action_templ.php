<div class="m-catalog-item col4 action <? if($j == 3) echo 'spot'?>">
    <a href="#">
        <div class="m-catalog-item-over">
            <div class="m-cat-img action-img" style="background-image: url(<?=$arActionImg[$j];?>)"></div>
            <div class="m-cat-text">
                <h3 class="product-name"><?=$arActionInfo[$j%2]['name'];?></h3>
                <div class="m-cat-desc action-desc nolower"><?=$arActionInfo[$j%2]['desc'];?></div>
            </div>
        </div>
    </a>
</div>