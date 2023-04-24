<?php
    include 'includes/thankyouheader.html';
$name = $_POST['name'];

echo "<div class='text-center vh-100'>
<h1>You have successfully logged in!! $name<h1>
</div>";

include 'includes/footer.html';
?>