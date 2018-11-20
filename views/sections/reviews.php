<!-- Reviews -->
<section id="reviews">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-12">
                <h2 class="section-title text-center mb-5">
                    <?= $reviews['title']?>
                </h2>
                <div class="reviews-slider">
                    <?php 
                        foreach ($reviews['items'] as $item) {
                            echo '<div class="reviews-slider-item">'
                            .
                            '<div class="img" style="background-image: url(' . $item['image'] .')"></div>'
                            .
                            '   <div class="content">' 
                            .   '   <p class="content__text">' . $item['text'] . '</p>' 
                            .   '   <h5 class="content__description">' . $item['description'] . '</h5>' 
                            .   '</div>'
                            .'</div>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section> 