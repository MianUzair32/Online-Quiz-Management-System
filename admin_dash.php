<?php 
$showError="false";
if($_SERVER['REQUEST_METHOD']=='POST'){
  include "Partial/_dbconnect.php";
  $admin_email=$_POST['adminEmail'];
  $adminPassword=$_POST['adminPassword'];
  $sql="SELECT * FROM `admin` WHERE admin_email='$admin_email'";
  if($numRows>0){
    $showError="Email already in use";
}
else{
    if($adminPassword){
        $hash=password_hash($adminPassword, PASSWORD_DEFAULT);
        $sql="INSERT INTO `admin` ( `admin_email`, `password`) VALUES ( '$admin_email', '$hash')";
        $result=mysqli_query($con,$sql);
        if($result){
            $showAlert=true;
            header("location: /OQMSS/admin_dash.php?success=true");
            exit();
        }

    }
    else{
        $showError="Passwords do not match";
    }
}
header("location: /OQMSS/index.php?admin_dashsuccess=false&error=$showError");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin-Dashboard</title>
  <link rel="stylesheet" href="asset/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="asset/css/style.css">
  <link rel="icon" href="asset/image/logo.jpg" class="rounded-circle" type="image/x-icon">
</head>
<body>
  <!-- Include Modals -->
<?php include "Partial/_navbar.php" ;  ?>

  <div class="container my-5">
    <table class="table table-striped" border="1px">
        <thead>
            <tr>
                <th>SNO</th>
                <th>Name</th>
                <th>Marks</th>
                <th>Time</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
        <tr>
                <td>1</td>
                <td>C++</td>
                <td>10</td>
                <td>5</td>
                <td>10</td>
            </tr>
            <tr>
                <td>2</td>
                <td>HTML</td>
                <td>20</td>
                <td>10</td>
                <td>20</td>
            </tr>
            <tr>
                <td>2</td>
                <td>CSS</td>
                <td>12</td>
                <td>15</td>
                <td>24</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Bootstrap</td>
                <td>15</td>
                <td>18</td>
                <td>25</td>
            </tr>
            <tr>
                <td>5</td>
                <td>JS</td>
                <td>20</td>
                <td>30</td>
                <td>30</td>
            </tr>
        </tbody>
    </table>
  </div>
  <!-- include footer -->
<?php include "Partial/_footer.php" ?>

  <script src="asset/js/bootstrap.bundle.min.js"></script>
</body>

</html>