<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 photo-gallery">
    <div class="photo-gallery-content">
        <div class="col-lg-3 col-md-3 col-sm-3 thumbs">
            <? foreach ($arPhotoGallery as $item) {?>
                <a class="thumb-over" href="#<?=$item['large']?>">
                    <div class="thumb" style="background-image: url(<?=$item['thumb']?>)"></div>
                </a>

            <?}?>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 large-image">
            <div id="good-card-carousel" class="owl-carousel">
                <? foreach ($arPhotoGallery as $item) {?>
                    <div class="carousel-item-wrapper">
                        <div class="carousel-img-wrapper" data-hash="<?=$item['large']?>">
                            <div class="carousel-img" style="background-image: url(<?=$item['large']?>)"></div>
                        </div>
                    </div>
                <?}?>
            </div>
        </div>
    </div>
</div>