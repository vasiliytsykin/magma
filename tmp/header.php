<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <?php foreach($arCSS as $arItem){?><link rel="stylesheet" href="<?=$arItem;?>" /><?}?>
    <title><?=$_page['title'];?></title>
</head>

<body>

<div class="wrapper <?=$_page['type_page']?>">

    <?php include __DIR__.'/main_menu_templ.php';?>
    
    <section class="content">