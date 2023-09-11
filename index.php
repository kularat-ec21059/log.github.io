<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="styles.css"> <!-- Add your CSS file here -->
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>
            <form action="login.php" method="post">
                <div class="input-container">
                    <label for="username">Username</label>
                    <input type="text" id="username" placeholder="user name" name="uname" required >
                </div>

                <div class="input-container">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="password " name="password" required>
                </div>

                <div class="button-container">
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
