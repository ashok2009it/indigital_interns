<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assests/style.css">
    <link rel="icon" href="../Assests/Images/Favicon.png">
    <title>Login page</title>
</head>
<body class="login">
    <div class="wrapper">
        <main>
            <div class="tag">
                
                 <h1>Join our</h1>
                 <h1>community</h1>
                
                <img src="../Assests/Images/login.jpg" alt="" height="320px" width="564px" id="beads"> 
            </div>
            <div class="form">
                <h2>Hello! Welcome back.</h2>
                <form action="../index.php">
                    <label for="">Email or Mobile number</label><br>
                    <input type="Email" placeholder="example@gmail.com" required> <br>
                    <label for="">Password</label><br>
                    <input type="password" required><br>
                    <input type="checkbox" id="check">
                    <label>Remember me</label>
                    <a id="forgotpwd">Forgot Password?</a><br>
                        <button type="submit">login</button>
                    <br>

                    <div>
                        <p>Don't have an account? <a href="signup.php">Create account!</a></p>
                    </div>
                </form>
            </div>
    </div>
</body>
</html>