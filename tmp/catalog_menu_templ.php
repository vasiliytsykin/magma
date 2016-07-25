<nav class="navbar catalog-menu">
    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#catalog-main-menu" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse catalog-main-menu" id="catalog-main-menu">
            <ul class="nav navbar-nav">
                <? foreach ($arCatalogMenu as $categoryName => $subCategories) {?>
                    <li class="catalog-nav-main-item">
                    <a href="#" class="a-category"><?=$categoryName?></a>
<!--                    <ul class="catalog-nav-sub">-->
<!--                        --><?// foreach ($subCategories as $subCategory) {?>
<!--                            <li class="catalog-nav-sub-item"><a href="#" class="a-sub-category">--><?//= $subCategory; ?><!--</a></li>-->
<!--                        --><?//}?>
<!--                    </ul>-->
                    </li><?}?>
            </ul>
        </div>

    </div>
</nav>