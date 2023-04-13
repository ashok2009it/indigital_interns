<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assests/style.css"> 
    <link rel="icon" href="../Assests/Images/Favicon.png">
    <title>signup page</title>
</head>
<body class="signup">
  <div class="container">
    <h1>Create Account</h1>
    <form action="/register" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required><br>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required><br>
      <label for="confirm_password">Confirm Password:</label>
      <input type="password" id="confirm_password" name="confirm_password" required><br>
      <input type="submit" value="Create Account">
    </form>
  </div>
</body>
</html>

            
