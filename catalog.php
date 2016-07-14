<?php
include __DIR__.'/tmp/init.php';
include __DIR__.'/tmp/header.php';
?>

<nav class="catalog-nav">
    <ul class="catalog-nav-main">
        <li class="catalog-nav-main-item">
            <a href="#" class="a-category">Все</a>
                <ul class="catalog-nav-sub">
                    <li class="catalog-nav-sub-item"><a href="#" class="a-sub-category">Категория</a></li>
                    <li class="catalog-nav-sub-item"><a href="#" class="a-sub-category">Категория</a></li>
                    <li class="catalog-nav-sub-item"><a href="#" class="a-sub-category">Категория</a></li>
                    <li class="catalog-nav-sub-item"><a href="#" class="a-sub-category">Категория</a></li>
                </ul>
        </li>
        <li class="catalog-nav-main-item">
            <a href="#" class="a-category">Гибриды</a>
            <ul class="catalog-nav-sub">
                <li class="catalog-nav-sub-item"><a href="#" class="a-sub-category">Категория</a></li>
                <li class="catalog-nav-sub-item"><a href="#" class="a-sub-category">Категория</a></li>
                <li class="catalog-nav-sub-item"><a href="#" class="a-sub-category">Категория</a></li>
                <li class="catalog-nav-sub-item"><a href="#" class="a-sub-category">Категория</a></li>
            </ul>
        </li>
        <li class="catalog-nav-main-item">
            <a href="#" class="a-category">Видеорегистраторы</a>
            <ul class="catalog-nav-sub">
                <li class="catalog-nav-sub-item"><a href="#" class="a-sub-category">Категория</a></li>
                <li class="catalog-nav-sub-item"><a href="#" class="a-sub-category">Категория</a></li>
                <li class="catalog-nav-sub-item"><a href="#" class="a-sub-category">Категория</a></li>
                <li class="catalog-nav-sub-item"><a href="#" class="a-sub-category">Категория</a></li>
            </ul>
        </li>
    </ul>
</nav>

<section class="catalog-header">
    <div class="category-name"><span class="category-name-text">Видеорегистраторы</span></div>
</section>


<section class="catalog-content colarea">
        <a href="#">
        <div class="m-catalog-item col4">
            <div class="m-catalog-item-over">
                <div class="m-cat-img" style="background-image: url('img/product1.png') "></div>
                <div class="m-cat-text">
                    <h3 class="product-name">Magma WIDE S50</h3>
                    <h3 class="price">7000 руб.</h3>
                    <div class="m-cat-desc">Description</div>
                </div>
            </div>
        </div>
        </a>
        <div class="m-catalog-item col4">
            <a href="#" class="catalog-image-link"></a>
            <div class="m-catalog-item-over">
                <div class="m-cat-img" style="background-image: url('img/product2.png') "> </div>
            </div>
        </div>
        <div class="m-catalog-item col4">
            <a href="#" class="catalog-image-link"></a>
            <div class="m-catalog-item-over">
                <div class="m-cat-img" style="background-image: url('img/product3.png') "> </div>
            </div>
        </div>
        <div class="m-catalog-item col4">
            <a href="#" class="catalog-image-link"></a>
            <div class="m-catalog-item-over">
                <div class="m-cat-img" style="background-image: url('img/product4.png') "> </div>
            </div>
        </div>
</section>

<?php
include __DIR__.'/tmp/footer.php';
?>