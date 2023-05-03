
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Indigilab</title>
    <link rel="stylesheet" href="../assests/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

</head>
<body class="login-page">
        <div class="navbar">
            <div class="container">
              <a href="../pages/index.php"><img class="img" src="../assests/images/logo.svg" href="#" alt="indigital" style="cursor:pointer;"></a>
            </div>
        </div>        
    <div class="login-box">
        <h2 class="heading-login-box">Login</h2>
        <form action="login.php" method="post">
        
            <div class="user-box">
                <input class="user-box-input" name="name" type="text" required>
                <label class="user-box-label">Username</label>
            </div>
            <div class="user-box">
                <input class="user-box-input" type="password" required>
                <label class="user-box-label">Password</label>
            </div>
            <div class="user-box">
                <input class="user-box-input" type="password" required>
                <label class="user-box-label"> Confirm Password</label>
            </div>
            <button type="submit">Submit</button>
             
        </form>
    </div>
</body>