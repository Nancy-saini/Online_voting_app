<!DOCTYPE html>
<html lang="en">
<head>
    <title>Online Voting Application</title>
    <link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>
    <div class="main">
        <h1 class="logo">Online Voting Application</h1>
        <hr>
        <div class="content">
            <p class="cn"><img src="uploads/vote.png" height="400px" width="600px" alt="image here"></p>
            <div class="form">
                <h2>Login Here</h2>
                <form action="api/login.php" method="POST">
                    <input type="number" name="mob" placeholder="Enter mobile" required>
                    <input type="password" name="pass" placeholder="Enter password" required>
                    <select name="role">
                        <option value="1">Voter</option>
                        <option value="2">Group</option>
                    </select>
                    <button class="btnn" type="submit" name="loginbtn">Login</button>
                    <p class="link">New User?<br>
                    <a href="routes/register.php">Register here</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>