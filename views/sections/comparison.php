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
                            .'<a href="#" class="btn comparison-card__btn open-modal-comparison">Хочу это авто</a>'
                        .'</div></div>';
                }
            ?>
        </div>
    </div>
</section>

<!-- Custom Modal -->
<div class="custom-modal custom-modal--comparison">
    <div class="close-modal close-modal--comparison">
        <div class="line line--left"></div>
        <div class="line line--right"></div>
    </div>
    <div class="custom-modal-header">
        <h3 class="title">
            Оставьте заявку
        </h3>
    </div>
    <div class="custom-modal-body">
        <form>
            <div class="form-column">
                <div class="form-group">
                    <label for="user-name--comparison" class="label-placeholder">Введите ваше имя</label>
                    <input type="text" name="name" class="form-control" id="user-name--comparison">
                </div>
                <div class="form-group">
                    <label for="user-phone--comparison" class="label-placeholder">Номер телефона</label>
                    <input type="phone" name="phone" class="form-control" id="user-phone--comparison">
                </div>
                <div class="form-group form-group--btn">
                    <button type="submit" class="btn btn-primary">Оставить заявку</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal-mask"></div>