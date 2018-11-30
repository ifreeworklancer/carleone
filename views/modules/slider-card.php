<div class="comparison-card">
    <div class="comparison-card-top">
        <div class="img" style="background-image: url(<?= $val['image'] ?>)"></div>
        <h4 class="title"><?= $val['title'] ?></h4>
    </div>
    <div class="comparison-card-bottom">
        <div class="comparison-card-bottom-item comparison-card-bottom-item--UA order-2 order-sm-1">
            <div class="title">Цена в Украине</div>
            <div class="info">
                <div class="info__logo" style="background-image: url(<?= $val['logoInUa'] ?>)"></div>
                <div class="info-value">$<span class="price"><?= $val['priceInUA'] ?></span></div>
            </div>
        </div>
        <div class="comparison-card-bottom-item comparison-card-bottom-item--USA order-1 order-sm-2">
            <div class="title">Цена в США</div>
            <div class="info">
                <div class="info__logo" style="background-image: url(<?= $val['logoInUSA'] ?>)"></div>
                <div class="info-value">$<span class="price">
                        <?= round(intval(str_replace(' ', '', $val['priceInUA'])) * 0.7) ?>
                    </span></div>
            </div>
        </div>
    </div>
    <a href="#" class="btn comparison-card__btn open-modal-comparison" data-car="<?= $val['title'] ?>">Хочу это авто</a>
</div>