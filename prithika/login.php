<div class="full-page">
<?php
    include 'includes/success.html';
    $name = $_POST['name'];
    echo "<div style='text-align:center;height:100vh;'>
    <h1 style='color:white;'>You have successfully logged in!! $name</h1>
    </div>";

    include 'includes/footer.html';
?>