<section class="contact">
    <div class="header-container">
        <h1>Contact Us</h1>
    </div>

    <form action="?page=contact&action=send" method="post" onsubmit="return contact.send(this)">
            <?php 
                $msg = '';
                if(isset($_GET['status'])) {
                    if($_GET['status'] == 0) {
                        $msg = 'Could not send email, please try again';
                    } else {
                        $msg = 'message sent succesfully';
                    }
                }
            ?>
            <?php if($msg){ ?>
                <p class="msg"><?= $msg ?></p>
            <?php } ?>
        <div class="form-group">
            <label for="">name</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="">email</label>
            <input type="email" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="">subject</label>
            <input type="text" name="subject" id="subject">
        </div>
        <div class="form-group">
            <label for="">message</label>
            <textarea type="text" name="message" id="message"></textarea>
        </div>
        <div class="form-group">
            <button>Send</button>
        </div>
    </form>
</section>