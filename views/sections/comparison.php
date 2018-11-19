<!-- Comparison -->
<section id="comparison">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-lg-7">
                <div class="section-description">
                    <h2 class="section-description__title">
                        <?= $comparison['title']?>
                    </h2>
                    <div class="section-description__subtitle">
                        <?= $comparison['subtitle']?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php 
                foreach ($comparison['items'] as $item) {
                    echo '<div class="col-sm-8 col-lg-6 mx-auto mx-lg-0"><div class="comparison-card">'
                            .'<div class="comparison-card-top">'
                                .'<div class="img" style="background-image: url(' . $item['image'] .')"></div>'
                                .'<h4 class="title">' . $item['title'] . '</h4>'
                            .'</div>'
                            .'<div class="comparison-card-bottom">'
                                .'<div class="comparison-card-bottom-item comparison-card-bottom-item--UA order-2 order-sm-1">'
                                    .'<div class="title">Цена в Украине</div>'
                                    .'<div class="info">'
                                        .'<div class="info__logo" style="background-image: url(' . $item['logoInUa'] .')"></div>'
                                        .'<div class="info-value">$<span class="price">' . $item['priceInUA'] . '</span></div>'
                                    .'</div>'
                                .'</div>'
                                .'<div class="comparison-card-bottom-item comparison-card-bottom-item--USA order-1 order-sm-2">'
                                    .'<div class="title">Цена в США</div>'
                                    .'<div class="info">'
                                        .'<div class="info__logo" style="background-image: url(' . $item['logoInUSA'] .')"></div>'
                                        .'<div class="info-value">$<span class="price">' . $item['priceInUSA'] . '</span></div>'
                                    .'</div>'
                            .'</div>'
                            .'</div>'
                            .'<a href="#" class="btn comparison-card__btn">Хочу это авто</a>'
                        .'</div></div>';
                }
            ?>
        </div>
    </div>
</section>