<!-- Order -->
<section id="order">
    <div class="container">
        <div class="row">
            <div class="col-sm-11 col-lg-9 mx-auto">
                <div class="order-item">
                    <h2 class="section-title text-white mb-4">
                        <?= $order['title']?>
                    </h2>
                    <form>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="user-name--order" class="label-placeholder">Введите ваше имя</label>
                                <input type="text" name="name" class="form-control" id="user-name--order">
                            </div>
                            <div class="form-group">
                                <label for="user-phone--order" class="label-placeholder">Номер телефона</label>
                                <input type="phone" name="phone" class="form-control" id="user-phone--order">
                            </div>
                            <div class="form-group form-group--btn d-flex justify-content-center justify-content-sm-end">
                                <button type="submit" class="btn btn-primary">Оставить заявку</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>