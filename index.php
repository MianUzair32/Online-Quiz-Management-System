<?php
$showError = "false";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include "Partial/_dbconnect.php";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $number = $_POST['number'];
  $institute = $_POST['institute'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];

  //check weather this email exits
  $sql = "select * from `users` where email='$email'";
  $result = mysqli_query($con, $sql);
  $numRows = mysqli_num_rows($result);
  if ($numRows > 0) {
    $showError = "email already in use";
  } else {
    if ($password == $cpassword) {
      $hash = password_hash($password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO `users` (`username`, `email`, `gender`, `mobile`, `institute`, `password`) VALUES ('$name', '$email', '$gender', '$number', '$institute', '$hash')";
      $result = mysqli_query($con, $sql);
      if ($result) {
        $showAlert = true;
        // header("location: /OQMSS/index.php?success=true");
        $showAlert = "you are registered successfully";

        // print_r($showAlert);
        // exit();
      }
    } else {

      $showError = "Passwords do not match";
      // print_r($showError);die();

    }
  }

  // header("location: /OQMSS/index.php?signupsuccess=false&error=$showError");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OQMS-Home</title>
  <link rel="stylesheet" href="asset/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="asset/css/style.css">
  <link rel="icon" href="asset/image/logo.jpg" class="rounded-circle" type="image/x-icon">

</head>

<body>
  <!-- Include Header -->
  <?php include "Partial/_header.php" ?>
  <!-- <?php if (isset($showAlert)) { ?>
    <h1><?php print_r($showAlert); ?></h1>
  <?php } ?> -->
  <!-- <?php if ($showError != 'false') { ?>
    <h1><?php print_r($showError); ?></h1>
  <?php } ?> -->
  <!-- bg-img/signup-form -->
  <div class=" bg">
    <!-- Signup-form -->
    <div class="container-fluid container-form">
      <div class="row">
        <div class="col-5"></div>
        <div class="col signup-container my-4 text-center">
          <form action="/OQMSS/index.php" method="post">
            <fieldset>
              <h1>Signup-Form</h1>
              <!-- Enter Name -->
              <div class="form-group">
                <label for="name" class="col-md-12"><b>Name</b></label>
                <div class="col-md-12">
                  <input type="text" id="name" name="name" placeholder="Enter Your Name">
                </div>
              </div>
              <!-- Enter Email -->
              <div class="form-group">
                <label for="" class="col-md-12"><b>Email</b></label>
                <div class="col-md-12">
                  <input type="email" id="email" name="email" placeholder="Enter Your Email">
                </div>
              </div>
              <!-- Enter Gender -->
              <div class="form-group">
                <label for="" class="col-md-12"><b>Gender</b></label>
                <div class="col-md-12">
                  <select name="gender" id="gender">
                    <option value="gender">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                  </select>
                </div>
              </div>
              <!-- Enter Mobile No. -->
              <div class="form-group">
                <label for="" class="col-md-12"><b>Mobile No</b></label>
                <div class="col-md-12">
                  <input type="number" id="number" name="number" value="+92">
                </div>
              </div>
              <!-- Enter School/College/University/Institute -->
              <div class="form-group">
                <label for="" class="col-md-12"><b>Institute</b></label>
                <div class="col-md-12">
                  <input type="text" id="Institute" name="institute" placeholder="Enter Your Institute Name">
                </div>
              </div>
              <!-- Enter Password -->
              <div class="form-group">
                <label for="" class="col-md-12"><b>Password</b></label>
                <div class="col-md-12">
                  <input type="password" id="password" name="password" placeholder="Enter Your Password">
                </div>
              </div>
              <!-- Enter Conform-Password -->
              <div class="form-group">
                <label for="" class="col-md-12"><b>Conform-Password</b></label>
                <div class="col-md-12">
                  <input type="password" id="cpassword" name="cpassword" placeholder="Enter Conform-Password">
                </div>
              </div>
              <!-- Submit-Button -->
              <div class="form-group col-md-12">
                <button class="signup-btn">Submit</button>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- bg-img/signup-form-End -->

  <!-- include footer -->
  <?php include "Partial/_footer.php" ?>

  <script src="asset/js/bootstrap.bundle.min.js"></script>
  <script>
    function showAlert() {
      alert("registered successfully!");
    }
  </script>
</body>

</html>