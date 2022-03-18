<section>
    <div class="form-box">

        <h2>Modify News</h2>

        <form class="form" action="?type=admin&page=news&action=update" method="post">
            <div class="form-group">
                <label for="">title</label>
                <input type="text" name="title" value="<?= $data['news']['title'] ?>">
            </div>
            <div class="form-group">
                <label for="">video</label>
                <input type="text" name="video" value="<?= $data['news']['video'] ?>">
            </div>
            <div class="form-group">
                <label for="">short text</label>
                <textarea name="short_text" id="" cols="30" rows="10"><?= $data['news']['short_text'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="">text</label>
                <textarea name="text" id="" cols="30" rows="10"><?= $data['news']['text'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="">category</label>
                <select name="category_id" id="">
                    <?php foreach ($data['categories'] as $value) { ?>
                        <option <?= $data['news']['category_id'] == $value['id'] ? 'selected' : '' ?> value="<?=$value['id']?>"><?=$value['title']?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <input type="hidden" name="id" value="<?= $data['news']['id'] ?>">
                <button>Update</button>
            </div>
        </form>
    </div>
</section>