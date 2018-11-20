<!-- Questions -->
<section id="questions">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="section-description mb-5">
                    <h2 class="section-description__title">
                        <?= $questions['title']; ?>
                    </h2>
                    <div class="section-description__subtitle">
                        <?= $questions['subtitle']; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-11 ml-auto mr-0">
                <div class="questions-tabs">
                    <?php 
                        foreach ($questions['items'] as $item) {
                            echo '<div class="questions-tabs-item">'
                                .'<div class="questions">' .  $item['title'] . '</div>'
                                .'<div class="response">'
                                    .'<div class="response-header">Ответ:</div>'
                                    .'<div class="response-body"><p>' . $item['text'] . '</p></div>'
                                .'</div>'
                            .'</div>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>