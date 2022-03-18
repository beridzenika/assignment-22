<section>
    <div class="form-box">

        <h2>Update About</h2>

        <form class="form" action="?type=admin&page=about&action=update" method="post">
            <div class="form-group">
                <label for="">title</label>
                <input type="text" name="title" value="<?= $data['about']['title'] ?>">
            </div>
            <div class="form-group">
                <label for="">text</label>
                <textarea name="text" id="" cols="30" rows="10"><?= $data['about']['text'] ?></textarea>
            </div>
            <div class="form-group">
                <button>Update</button>
            </div>
        </form>
    </div>
</section>