<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../../frontend/css/client.css">
    <script src="./../../frontend/js/jq.js"></script>
    <script src="./../../frontend/js/nav.js"></script>
    <script src="./../../frontend/js/logging.js"></script>
</head>


<body>
    <div class="header">
        <h2>Login</h2>
    </div>

    <div class="acc">
        <form method="post" action="../../backend/php/login.php">
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" />
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" />
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="login_user" rel="login_user">Login</button>
            </div>
            <p>
                Not yet a member? <a href="./../../backend/php/register_clients.php" rel="backreg">Sign up</a>
            </p>
        </form>
    </div>
    <div rel='desp'></div>

</body>

</html>