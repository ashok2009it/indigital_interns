<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <link rel="icon" href="Assests/Images/Favicon.png" />
        <title>Home</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.2/chart.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/Assests/style.css" />
    </head>
    <body>
        <div class="home">
            <div class="contact">
                <header>
                    <img src="Assests/Images/home.jpg" alt="" class="bg"/>
                    <?php include 'Includes/header.php'; ?> 
                    <div class="tag">
                        <h1>Lorem</h1>
                        <p>Lorem ipsum, dolor sit amet adipisicing!</p>
                        <a href="#"><button>get started</button></a>
                    </div>
                </header>
            </div>

            <div class="usage">
                <h1>easy to use, easy to manage</h1>
                <main>
                    <div class="div1">
                        <img src="Assests/Images/use1.png" alt="" width="160px" height="160px" />
                        <p>easy registration</p>
                    </div>
                    <div class="div2">
                        <img src="Assests/Images/use2.png" alt="" width="160px" height="160px" />
                        <p>paperless environment</p>
                    </div>
                    <div class="div1">
                        <img src="Assests/Images/use3.png" alt="" width="160px" height="160px" />
                        <p>cost effective</p>
                    </div>
                </main>
            </div>
            <div class="features">
                <div class="container">
                    <h1>key features</h1>
                    <div class="row">
                        <div class="col">
                            <div class="content">
                                <img src="Assests/Images/key1.png" alt="Image" height="52px" width="52px" />
                                <h2>Lorem, ipsum dolor</h2>
                            </div>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt nisi aut facilis earum autem vel debitis reprehenderit mollitia quia maxime est error pariatur libero voluptas illo deserunt, perferendis
                                laborum quod!
                            </p>
                        </div>
                        <div class="col">
                            <div class="content">
                                <img src="Assests/Images/key2.png" alt="Image" height="52px" width="52px" />
                                <h2>perferendis laborum quod</h2>
                            </div>
                            <p>veritatis provident culpa explicabo inventore voluptate quasi. Asperiores hic blanditiis beatae minima repudiandae assumenda explicabo soluta nulla, laborum ducimus voluptas.</p>
                        </div>
                        <div class="col">
                            <div class="content">
                                <img src="Assests/Images/key3.png" alt="Image" height="52px" width="52px" />
                                <h2>amet consectetur</h2>
                            </div>
                            <p>dolorum quae, asperiores eligendi, dignissimos pariatur impedit temporibus labore debitis minus numquam tempore error veritatis provident culpa explicabo inventore voluptate quasi.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="content">
                                <img src="Assests/Images/key4.png" alt="Image" height="52px" width="52px" />
                                <h2>mollitia quia maxime</h2>
                            </div>
                            <p>consectetur at, quia eligendi in officiis quas quisquam! Quibusdam libero, reprehenderit excepturi alias rem qui dolorum quae, asperiores eligendi, dignissimos pariatur impedit temporibus labore debitis</p>
                        </div>
                        <div class="col">
                            <div class="content">
                                <img src="Assests/Images/key5.png" alt="Image" height="52px" width="52px" />
                                <h2>error pariatur libero</h2>
                            </div>
                            <p>atque ad consectetur at, quia eligendi in officiis quas quisquam! Quibusdam libero, reprehenderit excepturi alias rem qui dolorum quae, asperiores eligendi, dignissimos pariatur</p>
                        </div>
                        <div class="col">
                            <div class="content">
                                <img src="Assests/Images/key6.png" alt="Image" height="52px" width="52px" />
                                <h2>voluptas illo deserunt</h2>
                            </div>
                            <p>
                                incidunt ducimus inventore, quibusdam, maxime earum impedit unde laboriosam natus ex totam e st voluptas exercitationem, vel tenetur sapiente. Consequatur dolorum laboriosam delectus non repellendus quasi
                                maxime ratione cumque rerum ex sit, iste unde cupiditate porro aliquam numquam
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="report">
                <h1>your report</h1>
                <canvas id="myChart"></canvas>
            </div>
        </div>

        <script src="Assests/script.js"></script>
<!-- 
        <footer>
            <p>&copy; 2023 Indigital . All rights reserved.</p>
        </footer> -->
        <?php include 'Includes/footer.php'; ?>
    </body>
</html>
