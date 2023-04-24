<?php
function active($currect_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);  
  if($currect_page == $url){
      echo 'active'; 
  } 
}

?>
 <?php 
 $base_url= "http://localhost/AttendanceManagementSystem-master/indigital_interns"
?> 
<nav>

    <ul>
        
        <li><a class="<?php active('index.php');?>" href="<?php echo $base_url ?>/index.php">home</a></li>     
        <li><a class="<?php active('about.php');?>" href="<?php echo $base_url ?>/Pages/about.php">about us</a></li>
        <li><a class="<?php active('pricing.php');?>" href="<?php echo $base_url ?>/Pages/pricing.php">pricing</a></li>
        <li><a class="<?php active('contact.php');?>"href="<?php echo $base_url ?>/Pages/contact.php">contact</a></li>
        <li><a class="<?php active('attendance.php');?>" href="<?php echo $base_url ?>/Pages/attendance.php">attendance</a></li>
        <li><a class="<?php active('login.php');?>" href="<?php echo $base_url ?>/Pages/login.php"><button id="btn1">login</button></a></li>  

    </ul>
    <div class="logo">
        <img src="https://indigital.co.jp/images/indigital-logo.svg" alt="Your Logo" height="50px" width="130px">
    </div>
</nav>

