<!DOCTYPE html>
<html>
<head>
    <title>Thanks Page</title>
    <link rel="stylesheet" type="text/css" href="../Assests/style.css">
    <link rel="icon" href="Assests/Images/Favicon.png">
    <style>
        h1,h2{
            text-align:center;
        }
        .form-data{
            text-align:center;
            font-size:20px;
        }
        .data{
            display: inline-block;
            text-align: left;
        }
        .outro p{
            text-align:center;
            font-size:18px;
            color:grey;
        }
        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top:30px;
        }

        .button-container button {
            border-radius: 0px;
            width: 100px;
        }
        .outro #btn1{
            background-color:   #0b7c92;
        }
        #btn2{
            background-color:#d76ca2;
            margin-left:50px;
        }
        a{
            text-decoration:none;
            color:white;
        }
        .image{
            display:flex;
        }
        .image img{
            justify-content:center;
            align-items:center;
            margin:10px auto;
        }
    </style>
</head>
<body>
    <header>
		<?php include '../Includes/header.php' ?>
	</header>
    <div class="image">
    <img src="../Assests/Images/check.gif" height="150px" width="150px">
    </div>
    <h1>Thanks for registering!</h1>
   
    
    <h2>This is what we received</h2>
    <div class="form-data">
    <div class="data">
    <p>Name: <?php echo $_POST['name']; ?></p>
    <p>Email: <?php echo $_POST['email']; ?></p>
    <p>Mobile Number: <?php echo $_POST['number']; ?></p>
    <p>Date of Birth: <?php echo $_POST['dob']; ?></p>
    <p>Country: <?php echo $_POST['country']; ?></p>
    <?php
    if(isset($_POST['interests'])) {
        $selectedInterests = $_POST['interests'];
        echo "<p>Interests: </p>";
        echo "<ul>";
        foreach($selectedInterests as $interest) {
            echo "<li>" . $interest . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No interests selected.</p>";
    }
    
    ?>
    </div>
    </div>
    <div class="outro">
    <p>click confirm to redirect to the home page</p>
    <div class="button-container">
    <button id="btn1"><a href="signup.php">Edit </a></button>
    <button id="btn2"><a href="../index.php">Confirm </a></button>
    </div>
    
    
    </div>
   
   
    <?php include '../Includes/footer.php' ?>
</body>

</html>
