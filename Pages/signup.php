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
    <div class="left-col">
        <img src="../Assests/Images/signup.jpg" alt="" height="100px" width="30px">
        join our community
    </div> 
            <div class="right-col form">
                <h2>Create account</h2>
            <form action="thanks.php" method="post" enctype="multipart/form-data">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" required><br>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br>
                <label for="mobile">Mobile Number:</label><br>
                <input type="tel" id="mobile" name="mobile" required><br>
                <label for="dob">Date of Birth:</label><br>
                <input type="date" id="dob" name="dob" required><br>
                <label for="country">Country:</label><br>
                <select id="country" name="country" required>
                    <option value="">-- Select Country --</option>
                    <option value="canada">India</option>
                    <option value="canada">Germany</option>
                    <option value="usa">USA</option>
                    <option value="uk">UK</option>
                    <option value="canada">Canada</option>
                </select><br>
                <label>Interests:</label><br>
                <input type="checkbox" id="interest1" name="interests[]" value="interest1">
                <label for="interest1">Reading</label><br>
                <input type="checkbox" id="interest2" name="interests[]" value="interest2">
                <label for="interest2">Writing</label><br>
                <input type="checkbox" id="interest3" name="interests[]" value="interest3">
                <label for="interest3">swimming</label><br>
                <label for="profilePhoto">Profile Photo:</label><br>
                <input type="file" id="profilePhoto" name="profilePhoto"><br>
                <button>submit</button>
            </form>
</body>
</html>

            </div>
    </div> 
</body>
</html>