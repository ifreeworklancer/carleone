<!-- Intro -->
<section id="intro">
    <div class="parallax">
        <div class="parallax__item parallax__item--1" data-speed="1"></div>
        <div class="parallax__item parallax__item--2" data-speed="20"></div>
        <div class="parallax__item parallax__item--3" data-speed="40"></div>
        <div class="no-parallax"></div>
    </div>
    <div class="container h-100">
        <div class="row h-100 justify-content-between">
            <div class="col-sm-7 col-xl-6 h-100 d-flex align-items-center mb-4 mb-sm-0">
                <div class="intro-item">
                    <h1 class="intro-item__title">
                        <?= $intro['title'] ?>
                    </h1>
                    <div class="intro-item__subtitle">
                        <?= $intro['subtitle'] ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-5 col-xl-4 d-flex align-items-end">
                <div class="intro-order">
                    <h3 class="intro-order__title text-primary text-uppercase">
                        Оставить заявку
                    </h3>
                    <div class="intro-order__description text-white mb-4">
                        Хотите убедиться, что получится выгоднее?
                        Оставьте заявку, мы рассчитаем стоимость
                    </div>
                    <form>
                        <div class="form-column">
                            <div class="form-group">
                                <label for="user-name--intro" class="label-placeholder">Введите ваше имя</label>
                                <input type="text" name="name" class="form-control" id="user-name--intro">
                            </div>
                            <div class="form-group">
                                <label for="user-phone--intro" class="label-placeholder">Номер телефона</label>
                                <input type="phone" name="phone" class="form-control" id="user-phone--intro">
                            </div>
                            <div class="form-group form-groupc--btn">
                                <button type="submit" class="btn btn-primary">Оставить заявку</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>