<!-- advantages -->
<section id="advantages">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-lg-6">
                
            </div>
            <div class="col-sm-8 col-lg-6">
                <?php 
                    $count = 0;
                    foreach ($advantages['list'] as $item) {
                        $count++;
                        echo '<div class="advantages-item">'
                        .
                        '<div class="advantages-item__count"><span>' .  $count . '</span></div>'
                        .
                        '<div class="advantages-item__description">' .  $item['item'] . '</div>'
                        .
                        '</div>';
                    }
                ?>
            </div>
        </div>
    </div>
</section>