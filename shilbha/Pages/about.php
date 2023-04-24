<?php include '../config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About US</title>
    <link rel="stylesheet" href="../Assests/style.css">
    <link rel="icon" href="<?php echo BASE_URL; ?>//Assests/Images/Favicon.png">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.2/chart.min.js"></script>
    

</head>
<body>
    <div class="about">
        <div class="contact">
        <header>
            <img src="../Assests/Images/banner.jpg" alt="" height="300px" id="headImg">
            <?php include '../Includes/header.php' ?>
            <h2 >about us</h2>
            
        </header> 
    </div>
        <h1>who are we ?</h1>
        <div class="columns">
            
            <div class="col-left">
              <img src="../Assests/Images/whoarewe.jpg" alt="">
            </div>
            <div class="col-right">
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores eos necessitatibus 
                eveniet nulla veniam nostrum. Alias, esse quidem cum aliquam quos aliquid, magnam debitis, 
                perferendis nobis eum tenetur commodi iste officiis vitae. Velit, fugit doloremque.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia doloremque quibusdam ullam explicabo 
                    laboriosam debitis sed dolores soluta velit tempora nostrum expedita, eaque quaerat facilis assumenda nesciunt! Dolores incidunt nam rerum perspiciatis dolor alias 
                    accusantium. Libero inventore deleniti itaque. Ipsam iure deserunt explicabo eius alias! Dolores rerum aut hic quaerat.</p>
                    <button>read more</button>
            </div>
          </div>
         
        <div class="team">
            <h1>our team</h1>
            <div class="container">
                <div class="box box1">
                    <div class="team-member">
                        <img class="member-image" src="">
                        <h3 class="member-name"></h3>
                        <p class="member-role"></p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Ipsum soluta eos, rem dignissimos assumenda numquam?</p>
                      </div>
                </div>
                <div class="box">
                  <div class="team-member">
              <img class="member-image" src="">
              <h3 class="member-name"></h3>
              <p class="member-role"></p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ipsum soluta eos, rem dignissimos assumenda numquam?</p>
            </div>
                </div>
                <div class="box">
                    <div class="team-member">
                        <img class="member-image" src="">
                        <h3 class="member-name"></h3>
                        <p class="member-role"></p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Ipsum soluta eos, rem dignissimos assumenda numquam?</p>
                      </div>
                </div>
                <div class="box">
                    <div class="team-member">
                        <img class="member-image" src="">
                        <h3 class="member-name"></h3>
                        <p class="member-role"></p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Ipsum soluta eos, rem dignissimos assumenda numquam?</p>
                      </div>
                    </div>
                </div>
              </div>
        </div>
   
      
        <?php include '../Includes/footer.php' ?>
</div>
<script src="../Assests/script.js"></script>
</body>
</html>