<section>
    <div class="news-box">
        <div class="header">
            <h1>News List</h1>
            <a href="?type=admin&page=news&action=add">Add</a>
        </div>
        <table>
            <tbody>
            <?php foreach($data['news'] as $value) { ?>
                <tr>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['title'] ?></td>
                    <td><?= $value['short_text'] ?></td>
                    <td class="action">
                        <a href="?type=admin&page=news&action=edit&id=<?= $value['id'] ?>">edit</a>
                        <form action="?type=admin&page=news&action=delete"
                            onsubmit="return checkDelete()"
                            method="post">
                        <input type="hidden" value="<?= $value['id']; ?>" name="id">
                            <button>Delete</button>
                        </form>   
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <div class="paging">
        
        <?php 
            $size = ceil($data['cnt'] / $data['limit'] + 1);   
            for ($i=1; $i < $size; $i++) { 
        ?>
            <a href="http://localhost/daily-bugle/?type=admin&page=news&p=<?= $i ?>"><?= $i ?></a>
        <?php } ?>
        
        </div>
    </div>
</section>