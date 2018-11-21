<!-- Questions -->
<section id="teams">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="section-description mb-5">
                    <h2 class="section-description__title">
                        <?= $teams['title'] ?>
                    </h2>
                    <div class="section-description__subtitle">
                        <?= $teams['subtitle'] ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php 
                foreach ($teams['items'] as $item) {
                    echo '<div class="col-sm-6 col-lg-3 mx-auto mx-lg-0"><div class="teams-item">'
                        .'<div class="img" style="background-image: url(' . $item['image'] .')"></div>'
                        .'<div class="name">'. $item['name'] .'</div>'
                    .'</div></div>';
                }
            ?>
        </div>
    </div>
</section>