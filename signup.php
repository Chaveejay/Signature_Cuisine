<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images\icon.png" type="image/gif" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css\signup.css" >
    <title>SignUP</title>
</head>
<body>
    <div class="main-box">
        <div class="login">
            <div class="sign-up">
                Sign UP
            </div>
            
            <div class="form">
            <form action="">
                <div class="username">
            <label for="username">UserName</label><br>
            </div>
            <input type="text" id="username" name="username" ><br>
            <div class="password">
            <label for="email">Email</label><br>
            </div>
            <input type="text" id="email" name="email" ><br>
            <div class="password">
            <label for="password">Password</label><br>
            </div>
            <input type="password" id="password" name="password" ><br>
            <div class="password">
            <label for="confirm-password">Confirm Password</label><br>
            </div>
            <input type="password" id="confirm-password" name="confirm-password" ><br><br>
            <input type="submit" class="signup-btn" value="Sign UP">
            </form> 
            </div>
        </div>
        <div class="sign-in">
            <div class="welcome"> Welcome to SignUP </div>
            <div class="paragraph"> Already have an account?</div>
            <a href="login.php"><input type="submit" class="signin-btn" value="Sign IN"></a>

        </div>

    </div>
    
</body>
</html>