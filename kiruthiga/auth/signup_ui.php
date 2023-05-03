<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Custom CSS-->
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <title>Signup</title>
    <style>
        body{
            margin:0;
        }
        .interests
        {
            font-size: 15px;
            font-family: 'Poppins', sans-serif;
            color:rgb(80, 70, 70);
        }
    </style>
</head>

<body>
    <div class="register-backdrop">
        <div class="register-box flex-wrap w-50">

            <div class="title" style="margin-top:20px;">
                <h2>Signup</h2>
            </div>

            <form action="signup.php" method="post" enctype="multipart/form-data">
                <input class="form-control" type="text" 
                name="name" placeholder="Enter Name"required>

                <input class="form-control" style="margin-top:20px;" 
                type="email" name="email" placeholder="Enter Email"required>

                <input  class="form-control" style="margin-top:20px;" 
                type="password" name="password" placeholder="Enter Password"required>

                <input  class="form-control" style="margin-top:20px;" 
                type="number" name="mobile" placeholder="Enter mobile number"required>

                <input  class="form-control" style="margin-top:20px;" 
                type="date" name="date" placeholder="Select Date of birth"required>

                <div class="country">
                    <label style="color:rgb(80, 70, 70);" for="country">
                        Select Country:</label>

                    <input type="radio" id="country" name="country" value="India">
                        <span style="color:rgb(80, 70, 70);">India</span>

                    <input type="radio" id="country" name="country" value="Japan">
                        <span style="color:rgb(80, 70, 70);" >Japan</span><br/>
                </div> 

                <div style="margin-top:20px;">
                    <label class="interests" for="interests">Interests:</label><br>
                    <input type="checkbox" name="interests[]" value="Web development">
                    <span class="interests">Web development</span><br>
                    <input type="checkbox" name="interests[]" value="App development">
                    <span class="interests">App development</span><br>
                    <input type="checkbox" name="interests[]" value="Cloud development">
                    <span class="interests">Cloud development</span><br>
                    <input type="checkbox" name="interests[]" value="Cybersecurity">
                    <span class="interests">Cybersecurity</span><br>
                </div>

                <div style="margin-top:20px;">
                    <label class="interests" for="profile">Choose Profile picture:</label><br>
                    <input type="file" id="profile" class="form-control" name="profile">
                </div>

                <div class="d-flex justify-content-center" style="margin-top:20px;">
                    <input  class="btn btn-success" type="submit" value="Submit">
                </div> 
                
            </form> 
        </div>
    </div>
</body>
</html>