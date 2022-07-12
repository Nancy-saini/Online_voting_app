<html>
    <head>
        <title>Online voting Application - Registratrion</title>
        <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    </head>
    <body>
        <div class="main">
            <h1 class="logo">Online Voting Application</h1>
            <hr>
            <center>
                <div class="content">
                    <div class="regform">
                        <h2>Registration</h2>
                        <form action="../api/register.php" method="POST" enctype="multipart/form-data">
                            <input type="text" name="name" placeholder="Name" required>
                            <input type="number" name="mob" placeholder="Mobile" required>
                            <input type="password" name="pass" placeholder="Password" required>
                            <input type="password" name="cpass" placeholder="Confirm Password" required>
                            <input style="width: 31%" type="text" name="add" placeholder="Address" required><br>
                            <big>Upload image:</big><input type="file" id="profile" name="image" required><br>
                            <big>Select your role:</big>
                            <select name="role">
                                <option value="1">Voter</option>
                                <option value="2">Group</option>
                            </select><br>                   
                            <button class="btnn" type="submit" name="registerbtn">Register</button><br><br>
                            <p class="link">Already user?<br>
                            <a href="../">Login here</a>
                        </form>  
                    </div>
                </div>
            </center>
        </div>
    </body>
</html>