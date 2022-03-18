<section>
    <div class="form-box">

        <h2>Modify Category</h2>

        <form class="form" action="?type=admin&page=categories&action=update" method="post">
            <div class="form-group">
                <label for="">title</label>
                <input type="text" name="title" value="<?= $data['categories']['title'] ?>">
            </div>
            <div class="form-group">
                <label for="">show on home page</label>
                <select name="home" id="">
                    <option value="1" <?= $data['categories']['home'] == 1 ? 'selected' : ''?>>yes</option>
                    <option value="0" <?= $data['categories']['home'] == 0 ? 'selected' : ''?>>no</option>
                </select>
            </div>
            <div class="form-group">
                <input type="hidden" value="<?= $data['categories']['id'] ?>" name="id">
                <button>Update</button>
            </div>
        </form>
    </div>
</section>