<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Custom CSS-->
        <link rel="stylesheet" href="../assets/css/style.css">
    <title>Login</title>
    <style>
        body
        {
            margin:0;
        }
    
    </style>
</head>
<body>
    <div class="register-backdrop">
        <div class="register-box">
            <div class="title">
                <h2>Login</h2>
            </div>    
            
            <form action="login.php" method="post">
                <input class="form-control" style="margin-top:20px;" type="text"
                 name="name" placeholder="Enter Name"required autofocus>
                <input  class="form-control" style="margin-top:20px;" type="password"
                 name="password" placeholder="Enter Password"required>
                <input  class="btn btn-success" type="submit" value="Submit">
            </form> 
        </div>
    </div>
</body>
</html>