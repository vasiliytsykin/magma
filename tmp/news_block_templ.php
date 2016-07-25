<?php
for($i = 0; $i<3; $i++)
{?>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

        <? for ($j = 0; $j<$newsPerCol; $j++) { $index = $newsPerCol*$i + $j;
            if($index != $specialNewPos) {
            ?>
            <a href="#">
                <div class="news-item">
                    <div class="m-cat-img news-img" style="background-image: url(<?= $arNews[$index]['img']?>)"></div>
                    <div class="m-cat-desc news-desc">
                        <div class="news-date"><?= $arNews[$index]['date']?></div>
                        <?=$arNews[$index]['desc']?>
                    </div>
                </div>
            </a> <?}
            
            else include 'special_news_templ.php'; }?>
    </div>
<?}?>