<section>
    <div class="form-box">

        <h2>Add New Category</h2>

        <form class="form" action="?type=admin&page=categories&action=store" method="post">
            <div class="form-group">
                <label for="">title</label>
                <input type="text" name="title">
            </div>
            <div class="form-group">
                <label for="">show on home page</label>
                <select name="home" id="">
                    <option value="1">yes</option>
                    <option value="0">no</option>
                </select>
            </div>
            <div class="form-group">
                <button>add</button>
            </div>
        </form>
    </div>
</section>