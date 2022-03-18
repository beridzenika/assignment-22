<section>
    <div class="form-box">

        <h2>Update Main</h2>

        <form class="form" action="?type=admin&page=main&action=update" method="post">
            <div class="form-group">
                <label for="">title</label>
                <input type="text" name="title" value="<?= $data['main']['title'] ?>">
            </div>
            <div class="form-group">
                <label for="">video</label>
                <input type="text" name="video" value="<?= $data['main']['video'] ?>">
            </div>
            <div class="form-group">
                <label for="">text</label>
                <textarea name="text" id="" cols="30" rows="10"><?= $data['main']['text'] ?></textarea>
            </div>
            <div class="form-group">
                <button>Update</button>
            </div>
        </form>
    </div>
</section>