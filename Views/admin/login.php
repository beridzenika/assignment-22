<div class="container">
    <div class="form-box">

        <h2>Daily Bygle</h2>

        <form action="?type=admin&page=login&action=login" method="post">

            <div class="form-group">
                <input type="text" placeholder="Username" name="username">
            </div>
        
            <div class="form-group">
                <input type="password" placeholder="Password" name="password">
            </div>
        
            <div class="form-group">
                <button>Login</button>
            </div>

            <?php if (isset($_GET['s']) && $_GET['s'] == 0) { ?>
                <span class="error-text">incorrect usename or password, ganna cry?</span>
            <?php } ?>
        </form>
    </div>
</div>