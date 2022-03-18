<section>
    <div class="form-box">

        <h2>Add News</h2>

        <form class="form" action="?type=admin&page=news&action=store" method="post">
            <div class="form-group">
                <label for="">title</label>
                <input type="text" name="title">
            </div>
            <div class="form-group">
                <label for="">video</label>
                <input type="text" name="video">
            </div>
            <div class="form-group">
                <label for="">short text</label>
                <textarea name="short_text" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="">text</label>
                <textarea name="text" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="">category</label>
                <select name="category_id" id="">
                    <?php foreach ($data['categories'] as $value) { ?>
                        <option value="<?=$value['id']?>"><?=$value['title']?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <button>Add</button>
            </div>
        </form>
    </div>
</section>