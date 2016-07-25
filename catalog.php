<?php
include __DIR__.'/tmp/init.php';
include __DIR__.'/tmp/header.php';
include __DIR__.'/tmp/catalog_data.php';
?>


<nav class="catalog-nav">
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
        <div class="category-name col3 left">
            <span class="category-name-text">Видеорегистраторы</span>
            <span class="product-count">200 товаров</span>
        </div>
        <div class="simple-pager col3 mid">
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
        <div class="sort col3 right">
            <div class="pager-menu">
                <div class="pager-menu-item">
                    <span class="sort-text grey-text">Сортировать по: </span>
                </div>
                <div class="pager-menu-item select-box">
                    <select id="basic">
                        <option value="popular">Популярности</option>
                        <option value="price-asc">Возрастанию цены</option>
                        <option value="price-asc">Убыванию цены</option>
                    </select>
                </div>

            </div>
        </div>
    </div>
</section>



<section class="catalog-content colarea">
    <? for ($i = 0; $i<7; $i++)
        if($i != 3)
            for ($j = 0; $j<4; $j++)
                include __DIR__.'/tmp/product_templ.php';
        else
            for ($j = 0; $j<4; $j++)
                include __DIR__.'/tmp/action_templ.php';
    ?>
</section>


<section class="catalog-pre-footer">
        <div class="colarea">
            <div class="col3"></div>
            <div class="simple-pager pager-bottom col3">
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

<a class="back-on-top"><img src="img/back-on-top.png"></a>

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