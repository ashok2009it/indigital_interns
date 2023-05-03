<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!--Custom CSS-->
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">

    <!--Remix Icons-->  
      <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--Scroll Reveal-->  
      <script src="https://unpkg.com/scrollreveal"></script>

    <!--Google Fonts-->  
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">   

</head> 

<body>
    <header>
        <a href="../pages/index.php"><img class="img" src="../assets/images/indigital-logo.svg" href="#" alt="indigital" style="cursor:pointer;"></a>
        <div class="navbar">
            <a href="<?php echo BASE_URL; ?>pages/about.php">About</a>
            <a href="<?php echo BASE_URL; ?>pages/pricing.php">Pricing</a>
            <a href="<?php echo BASE_URL; ?>pages/contact.php">Contact</a>
            <a href="<?php echo BASE_URL; ?>pages/attendance.php">Attendance</a>
            <a href="<?php echo BASE_URL; ?>auth/login_ui.php">Login</a>
            <a href="<?php echo BASE_URL; ?>auth/signup_ui.php">Signup</a>
        </div>
    </header>
