<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Indigilab</title>
    <link rel="stylesheet" href="../assests/css/style.css">>
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
    
    <div class="login-box" style="margin-top: 200px; ">
        <h2 class="heading-login-box">SIGN UP</h2>
        <form method="post" action="signup.php" enctype="multipart/form-data">
            <div class="user-box">
                <input class="user-box-input" type="text" name="name" required>
                <label class="user-box-label">name</label>
            </div>
            <div class="user-box">
                <input class="user-box-input" type="email"  name="email" required>
                <label class="user-box-label">Email</label>
            </div>
            <div class="user-box">
                <input class="user-box-input" type="password" name="password" required>
                <label class="user-box-label">Password</label>
            </div>
            <div class="user-box">
                <input class="user-box-input" type="number" name="mobile-number"required>
                <label class="user-box-label">Mobile Number</label>
            </div>
            
            <label for="my-date" style="color: aliceblue;">Date of Birth:</label>
            <input type="date" id="my-date" name="my-date"><br><br>

            
            <label for="country" style="color: aliceblue;">Country:</label>
              <select id="country" name="country">
                <option value="">--Select Country--</option>
                <option value="USA">United States</option>
                <option value="UK">United Kingdom</option>
                <option value="Canada">Canada</option>
                <option value="Australia">Australia</option>
            </select><br><br>

            <label for="interests" style="color: aliceblue;">Interests:</label>
            <label for="music" style="color: aliceblue;"><br>
                <input type="checkbox" id="music" name="interest[]" value="Java">
                Java
              </label>
              <label for="movies" style="color: aliceblue;"><br>
                <input type="checkbox" id="movies" name="interest[]" value="Python">
                Python
              </label>
              <label for="sports" style="color: aliceblue;"><br>
                <input type="checkbox" id="sports" name="interest[]" value="Kotlin">
                Kotlin
              </label>
              <br><br>

    
              <label for="country" style="color: aliceblue;">Upload picture:</label><br>
              <input type="file" class="mt-2 form-control" accept="image/*" name="profile">
            
              <br><br><br>
              <button type="submit">Submit</button>
             
              
             
        </form>
    </div>
</body>