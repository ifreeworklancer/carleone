<!-- Sale -->
<section id="sale">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-lg-5 mx-auto mx-lg-0 p-lg-0">
                <div class="sale-item">
                    <div class="section-description mb-4">
                        <div class="section-description__subtitle">
                            <?= $sale['subtitle']?>
                        </div>
                        <h2 class="section-description___title text-primary">
                            <?= $sale['title']?>
                        </h2>
                    </div>
                    <form method="post" action="/send.php">
                        <div class="form-column form-column--min">
                            <div class="form-group">
                                <label for="user-name--sale" class="label-placeholder">Введите ваше имя</label>
                                <input type="text" name="name" class="form-control" id="user-name--sale">
                            </div>
                            <div class="form-group">
                                <label for="user-phone--sale" class="label-placeholder">Номер телефона</label>
                                <input type="tel" name="phone" class="form-control" id="user-phone--sale">
                            </div>
                            <div class="form-group form-group--btn">
                                <button type="submit" class="btn btn-primary">Оставить заявку</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="sale-img d-none d-lg-block">
                    <img src="../../images/content/sale/sale-item-1.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>