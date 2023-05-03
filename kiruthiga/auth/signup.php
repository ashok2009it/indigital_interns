<?php
  include '../includes/thankyouheader.php' ;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['mobile'];
        $date = isset($_POST['date']) ? $_POST['date'] : ''; 
        $country = $_POST['country'];
        $interests = isset($_POST['interests']) ? $_POST['interests'] : array(); 
        $interests_string = implode(', ', $interests);

        if (isset($_FILES["profile"]) && $_FILES["profile"]["error"] == UPLOAD_ERR_OK)
        {
          $temp_name = $_FILES["profile"]["tmp_name"];
          $file_name = $_FILES["profile"]["name"];
          $file_path = "../uploads/" . $file_name;
         
          move_uploaded_file($temp_name, $file_path);
          echo 
          "<div class='vh-100'>
          <div class='d-flex justify-content-center mt-5 mb-5'>
            <h1>Thank you for registering!! Continue using our service!!</h1>
          </div>
          <div class='profile-card shadow'>
          <div class=' mt-4 m-2 p-2 bg-secondary pb-5 w-70'>
              <div class='d-flex justify-content-center'><h3 class='text-white'>$name </h3></div>
              <div class='d-flex flex-wrap'>
                  <div class='flex-wrap d-flex justify-content-center align-items-center'>
                    <img class='profile pd-10'  src='" . $file_path . "'>
                  </div>
                  <div class='content container border'>
                      <p class='text-dark'>Email: $email </p>
                      <p class='text-dark'>Phone: $phone </p>
                      <p class='text-dark'>Date of Birth: $date </p>
                      <p class='text-dark'>Country: $country </p>
                      <p class='text-dark'>Interests: $interests_string </p>
                  </div>
              </div>        
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
    include '../includes/footer.php';
?>















