<div class="full-page">
<?php
    include '../includes/success.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['mobile-number'];
        $date = isset($_POST['my-date']) ? $_POST['my-date'] : ''; // Check if "date" exists
        $country = $_POST['country'];
        $interests = isset($_POST['interest']) ? $_POST['interest'] : array();
        $interests_string = implode(', ', $interests);
        if (isset($_FILES["profile"]) && $_FILES["profile"]["error"] == UPLOAD_ERR_OK)
        {
          $temp_name = $_FILES["profile"]["tmp_name"];
          $file_name = $_FILES["profile"]["name"];
          $file_path = "uploads/" . $file_name;
          move_uploaded_file($temp_name, $file_path);
          // Your HTML code for the profile card
          echo
         "<div class='vh-100'>
          <div class='profile-card'>
          <div class=' innercard'>
              <h3 class='signup-title'>$name</h3>
              <div class='d-flex'>
                  <img class='profile'  src='" . $file_path . "'>
                  <div class='innercontainer bg-success border d-flex '>
                      <div class='d-block'>
                        <p class='text-white'>Email: $email </p>
                        <p class='text-white'>Phone: $phone </p>
                        <p class='text-white'>Date: $date </p>
                        <p class='text-white'>Country: $country </p>
                        <p class='text-white'>Interests: $interests_string </p>
                     </div>   
                  </div>
              </div><br>
              <div class='register'><h2>Thankyou for registering...!</h2></div>
          </div>
        </div>
      </div>";
        }
        else
        {
          if (isset($_FILES["profile"])) {
            echo "Error uploading file. Error code: " . $_FILES["profile"]["error"];
          } else {
            echo "Error: 'profile' key not found in \$_FILES array.";
          }
        }
    }
?>
<?php
    include '../includes/footer.php';
?>
</div>