<?php include '../config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>//Assests/style.css">
    <link rel="icon" href="../Assests/Images/Favicon.png">
</head>
<body>
    <div class="contact">
        <header>
            <img src="../Assests/Images/banner.jpg" alt="" height="300px" width="1250px" id="headImg">
            <?php include '../Includes/header.php' ?>
            <h2 >Contact us</h2>
            
        </header>
        <div class="form">
            <h2>Let's start a conversation!</h2>
            <div class="box">
            <form action="/action_page.php">
                <label for="fname">First Name</label>
                <input type="text"  placeholder="Your name..">
            
                <label for="lname">Last Name</label>
                <input type="text"   placeholder="Your last name..">
                <label for="lname">Phone number</label>
                <input type="tel"  placeholder="+(00) 00000 00000">
               
            
                <label for="country">Country</label>
                <select name="country">
                <option value="australia">India</option>
                <option value="australia">Japan</option>
                  <option value="australia">Australia</option>
                  <option value="canada">Canada</option>
                  <option value="usa">USA</option>
                </select>
            
                <label for="subject">Message</label>
                <textarea  placeholder="Write something.." style="height:200px"></textarea>
            
                <button>send</button>
              </form>
        </div>
    </div> 

    </div>
    <?php include '../Includes/footer.php' ?>
</body>
</html>