<?php
include __DIR__.'/tmp/init.php';
include __DIR__.'/tmp/header.php';
include __DIR__.'/tmp/catalog_data.php';
?>


    <nav class="catalog-nav" xmlns="http://www.w3.org/1999/html">
    <ul class="catalog-nav-main">
        <? foreach ($arCatalogMenu as $menuItem) {?>
        <li class="catalog-nav-main-item">
            <a href="#" class="a-category"><?=$menuItem?></a>
                <ul class="catalog-nav-sub">
                    <li class="catalog-nav-sub-item"><a href="#" class="a-sub-category">Категория</a></li>
                    <li class="catalog-nav-sub-item"><a href="#" class="a-sub-category">Категория</a></li>
                    <li class="catalog-nav-sub-item"><a href="#" class="a-sub-category">Категория</a></li>
                    <li class="catalog-nav-sub-item"><a href="#" class="a-sub-category">Категория</a></li>
                </ul>
        </li><?}?>
    </ul>
</nav>



<section class="catalog-header">
    <div class="colarea">
        <div class="category-name col3"><span class="category-name-text">Видеорегистраторы</span></div>
        <div class="pager col3">
            <ul class="pager-menu">
                <li class="pager-menu-item"><a href="#"><img class="arrow" src="img/arrows-02.svg"></a></li>
                <li class="pager-menu-item"><a href="#">1</a></li>
                <li class="pager-menu-item"><a href="#">2</a></li>
                <li class="pager-menu-item"><a href="#">3</a></li>
                <li class="pager-menu-item">...</li>
                <li class="pager-menu-item"><a href="#">12</a></li>
                <li class="pager-menu-item"><a href="#"><img class="arrow" src="img/arrows-01.svg"></a></li>
            </ul>
        </div>
        <div class="sort col3">
            <ul class="pager-menu">
                <li class="pager-menu-item">
                    <span class="sort-text grey-text">Сортировать по: </span>
                </li>
                <li class="pager-menu-item">
                    <span class="sort-order-text">Популярности</span>
                </li>
                <li class="pager-menu-item">
                    <a href="#"><img class="arrow" src="img/arrows-04.svg"></a>
                </li>
            </ul>
        </div>
    </div>
</section>



<section class="catalog-content colarea">
    <? for ($i = 0; $i<7; $i++)
    for ($j = 0; $j<4; $j++)
    {?>
        <a href="#">
        <div class="m-catalog-item col4">
            <div class="m-catalog-item-over">
                <div class="m-cat-img" style="background-image: url(<?=$arProductImg[$j];?>)"></div>
                <div class="m-cat-text">
                    <h3 class="product-name"><?=$arProductInfo[$j%2]['name'];?></h3>
                    <h3 class="price"><?=$arProductInfo[$j%2]['price'];?></h3>
                    <div class="m-cat-desc nolower"><?=$arProductInfo[$j%2]['desc1'];?></div>
                    
                </div>
            </div>
        </div>
        </a>
<?}?>
</section>


    <section class="catalog-pre-footer">
        <div class="colarea">
            <div class="col3"></div>
            <div class="pager pager-bottom col3">
                <ul class="pager-menu">
                    <li class="pager-menu-item"><a href="#"><img class="arrow" src="img/arrows-02.svg"></a></li>
                    <li class="pager-menu-item"><a href="#">1</a></li>
                    <li class="pager-menu-item"><a href="#">2</a></li>
                    <li class="pager-menu-item"><a href="#">3</a></li>
                    <li class="pager-menu-item">...</li>
                    <li class="pager-menu-item"><a href="#">12</a></li>
                    <li class="pager-menu-item"><a href="#"><img class="arrow" src="img/arrows-01.svg"></a></li>
                </ul>
            </div>
            <div class="col3">
            </div>
        </div>
    </section>



<section class="catalog-footer">
    <div class="tc">
        <div class="td">
            <div class="mm">
                <div class="catalog-footer-text">
                    <span class="name">Magma WIDE S50 </span><span class="text">теперь</br>
                        доступен и в Екатериинбурге.</span></br>
                    <a href="#" class="btn btn-white buynow">купить сейчас за 2600 руб.</a>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
include __DIR__.'/tmp/footer.php';
?>