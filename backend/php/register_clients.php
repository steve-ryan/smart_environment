<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./../../frontend/css/client.css"/>
        <script src="./../../frontend/js/jq.js"></script>
        <script src="./../../frontend/js/nav.js"></script>
    </head>
    <body>
        <div class="header">
            <h2>Register</h2>
        </div>
          
        <form method="post" action="./../../backend/php/register.php">
            <div class="input-group">
              <label>Username</label>
              <input type="text" name="username" required>
            </div>
            <div class="input-group">
                <label>Phone</label>
                <input type="tel" pattern="^\d{3}-\d{3}-\d{4}$" name="phone" required >
              </div>
            <div class="input-group">
              <label>Email</label>
              <input type="email" name="email" pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required >
            </div>
            <div class="input-group">
              <label>Password</label>
              <input type="password" name="password_1" required>
            </div>
            <div class="input-group">
              <label>Confirm password</label>
              <input type="password" name="password_2" required>
            </div>
            <div class="input-group">
              <button type="submit" class="btn" name="reg_user" rel="reg_user"">Register</button>
            </div>
            <p>
                Already a member? <a href="./../../backend/php/login_client.php" rel="regfro">Sign in</a>
            </p>
        </form>
        
        
    </body>
</html>
