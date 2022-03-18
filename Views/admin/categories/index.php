<section>
    <div class="categories-box">
        <div class="header">
            <h1>Categories List</h1>
            <a href="?type=admin&page=categories&action=add">Add</a>
        </div>
        <div class="list">
            <?php foreach($data['categories'] as $value) { ?>
            <div class="item">
                <span>
                    <?= $value['title'] ?>
                </span>
                <div class="action">
                    <a href="?type=admin&page=categories&action=edit&id=<?= $value['id']?>">Edit</a>
                    <form action="?type=admin&page=categories&action=delete"
                    onsubmit="return checkDelete()"
                    method="post">
                    <input type="hidden" value="<?= $value['id']; ?>" name="id">
                        <button>Delete</button>
                    </form>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>