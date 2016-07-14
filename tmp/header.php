<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <?php


foreach($arCSS as $arItem){?><link rel="stylesheet" href="<?=$arItem;?>" /><?
}?>

<title><?=$_page['title'];?></title>
    </head>
<body>
<div class="wrapper <?=$_page['type_page']?>">


    <header class="header">
<div class="mm">

        <div class="head-main-text">

            <div class="colarea">
                <div class="col-logo"><a href="index.php"><img src="/img/logo.svg"></a></div>

            </div>

        </div>
        <nav class="nav">
<div class="menu-area">
    <div class="header-phone-cart">

        <div class="header-phone">+7 876 556 454</div>
       <div class="header-cart"><a href="#" class="cart-head" ><span   class="icon cart-icon"><img src="img/svg_compare-01.svg"> </span><span class="cart-count">4</span></a></div>
        <div class="header-cart"><a href="#" class="cart-head" ><span   class="icon cart-icon"><img src="img/basket.svg"> </span><span class="cart-count">3</span></a></div>


    </div>
            <menu class="menu">
                <li><a href="catalog.php">Продукция</a></li>
                <li><a href="news.php">О нас</a></li>

                <li><a href="philosophi.php">Дилерам</a></li>
                <li><a href="contacts.php">Контакты</a></li>

            </menu>



</div>



        </nav>
        </div>
<div class="cb"></div>
    </header>
    <section class="content">


        <div class="">