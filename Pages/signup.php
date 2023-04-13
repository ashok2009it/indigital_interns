<!DOCTYPE html>
<html>
<head>
  <title>Create Account</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f8f8f8;
      margin: 30px 0 30px 0;
      padding: 0;
       display: flex;
      justify-content: center;
      align-items: center;
     
    }

    .container {
      background-color: #f5f5f5;
      border-radius: 5px;
      padding: 30px;
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      max-width: 400px;
      width: 100%;
    }

    h1 {
      text-align: center;
      margin-bottom: 30px; 
      font-variant:small-caps;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      margin-bottom: 10px;
    }

    input[type="text"],
    input[type="email"],
    input[type="date"],
    input[type="tel"],select{
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
 

  .checkbox-conatiner{
  display: flex;
  align-items: center;
  }

  
input[type="checkbox"] {
   transform: scale(1.8); 
  margin-right: 5px; 
  margin-bottom:20px;
}

   

  input[type="submit"] {
    padding: 10px;
    background-color: #d76ca2;
    color: #ffffff;
    font-weight: bold;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
   @media only screen and (min-width: 1300px) {
   h1{
    font-size:40px;
  }
  label{
    font-size:25px;
  }
  input[type="checkbox"] {
   transform: scale(2.1); 
}
.container{
  max-width:800px;
}
input[type="text"],
    input[type="email"],
    input[type="date"],
    input[type="tel"],select{
      height:40px;
    }
    input[type="submit"]{
      height:55px;
    }
    select{
      height:55px;
    }
   } 
  </style>
</head>
<body>
  <div class="container">
    <h1>create account</h1>
    <form action="thanks.php" method="post">
      <label>Username</label>
      <input type="text" name="name" required><br>
      <label >Email</label>
      <input type="email" name="email" required><br>
      <label >Mobile Number</label>
      <input type="tel" name="number" required><br>
      <label>Date of birth </label>
      <input type="date" name="dob" required><br>
      <label  >Country</label><br>
        <select name="country" required>
            <option value="">-- Select Country --</option>
            <option value="usa">India</option>
            <option value="usa">Germany</option>
            <option value="usa">USA</option>
            <option value="uk">UK</option>
            <option value="canada">Canada</option>
        </select><br>
        <label>Interests</label><br>
        <div class="checkbox-container">
        <input type="checkbox"  name="interests[]" value="Reading">
        <label >Reading</label><br>
        <input type="checkbox" name="interests[]" value="Writing">
        <label >Writing</label><br>
        <input type="checkbox" name="interests[]" value="Swimming">
        <label for="interest3">Swimming</label><br>
        </div>
        
      <label>Profile photo </label>
      <input type="file" required><br>
      <input type="submit" value="Create Account">
    </form>
  </div>
</body>
</html>
