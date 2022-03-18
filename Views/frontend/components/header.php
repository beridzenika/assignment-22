<header>
    <div class="logo">
        <img src="assets/imgs/The_Daily_Bugle_-_Website.png" alt="">
    </div>
    <div class="menu">
        <ul>
            <li>
                <a href="?page=home" <?= $pageName == 'home' ? 'class="active"' : '' ?> >Home</a>
            </li>
        <?php foreach($data['categories'] as $value) { ?>
            <li>
                <a href="?page=<?= $value['title'] ?>" <?= $pageName == $value['title'] ? 'class="active"' : '' ?> ><?= $value['title'] ?></a>
            </li>
        <?php } ?>
            <li>
                <a href="?page=about" <?= $pageName == 'about' ? 'class="active"' : '' ?> >About</a>
            </li>
        </ul>
        <div class="login-btn">
            <a href="?type=admin&page=login">Log in</a>
        </div>
    </div>
</header>