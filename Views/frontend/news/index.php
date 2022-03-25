<section class="news">
    <div class="news-container">

        <div class="filter">
            <form action="">
                <input type="hidden" name="page" value="news">
                <div class="filter-box">
                    <input type="text" name="keyword" placeholder="search">
                </div>
                <div class="filter-box">
                    <button>Search</button>
                </div>
            </form>
        </div>

<?php foreach($data['news'] as $value) { ?>
        <div class="news-box">
            <h3><?= $value['title'] ?></h3>
            <div class="text-box">
                <p><?= $value['short_text'] ?></p>
                <div class="link-box">
                    <a href="?page=news&action=view&id=<?= $value['id'] ?>">READ MORE ></a>
                </div>
            </div>
        </div>
<?php } ?>
    </div>
</section>