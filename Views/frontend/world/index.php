<section class="news">
    <div class="news-container">
<?php foreach($data['news'] as $value) { ?>
        <div class="news-box">
        <h3><?= $value['title'] ?></h3>
        <div class="text-box">
            <p><?= $value['short_text'] ?></p>
            <div class="link-box">
                <a href="?page=world&action=view&id=<?= $value['id'] ?>">READ MORE ></a>
            </div>
        </div>
        </div>
<?php } ?>
    </div>
</section>