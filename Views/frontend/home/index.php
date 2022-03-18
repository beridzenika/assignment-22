<section>
    <div class="video-container">
        <h1><?= $data['main']['title'] ?></h1>
        <div class="video-box">
            <iframe width="791" height="445" src="<?= $data['main']['video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
            <div class="text-box">
                <p><?= $data['main']['text'] ?></p>
            </div>
        </div>
    </div>
    <div class="news-container">
        <div class="news-boxes">
            <div class="header">
                <img src="assets/imgs/Capture.jpg" alt="">
            </div>

        <?php foreach($data['news'] as $value) { ?>
            <div class="news-box">
                <h3><?= $value['title'] ?></h3>
                <p><?= $value['short_text'] ?></p>
                <div class="link-box">
                    <a href="">READ MORE ></a>
                </div>
            </div>
        <?php } ?>

            <div class="footer">
                <img src="assets/imgs/Capture2.jpg" alt="">
            </div>
        </div>
    </div>
</section>