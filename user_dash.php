<?php
$login = false;
$showError = false;
if($_SERVER['REQUEST_METHOD']=='POST'){
$email = $_POST['email'];
$password = $_POST['password'];
  // $sql="Select * from users where username='$username' AND password='$password'";
  $sql="SELECT * FROM `users` WHERE username='$username'";
  $result = mysqli_query($con , $sql);
  $num= mysqli_num_rows($result);
  if($num==1){
    while($row= mysqli_fetch_assoc($result)){
      if (password_verify($password, $row['password'])) {
        $login = true;
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['email']=$email;
        header('location:');
      }
      else{
        $showError = "Invalid Candentials";
      }
    }
  }

else{
  $showError = "Invalid Candentials";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User-Dashboard</title>
  <link rel="stylesheet" href="asset/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="asset/css/style.css">
  <link rel="icon" href="asset/image/logo.jpg" class="rounded-circle" type="image/x-icon">
</head>
<body>

  <!-- Include  -->
<?php include "Partial/_navbar.php" ;  ?>
<?php include "Partial/_dbconnect.php"; ?>
 <div class="container">
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum reprehenderit ipsum praesentium maiores veniam cupiditate doloribus optio quod omnis dolorum vero, ex soluta enim iste est voluptas ullam, non, exercitationem aperiam cumque dignissimos unde dolore molestiae atque. Voluptatibus possimus labore, dolor culpa laborum nam voluptatum odio sint rerum ipsum dignissimos veritatis nisi molestiae sunt, temporibus assumenda voluptas mollitia qui asperiores tempora architecto quas autem, laboriosam distinctio. Quo earum blanditiis praesentium sapiente quas possimus, vitae facere nostrum! Consectetur placeat quibusdam esse. Odit blanditiis maxime neque reprehenderit tenetur velit architecto ea ratione quibusdam, soluta, cupiditate dolore sunt ipsam qui! Voluptatem, beatae inventore impedit nostrum distinctio neque quod dolor magni architecto saepe sint quis dolores nihil ipsum natus quibusdam temporibus et, perferendis a! Voluptate animi porro vitae culpa suscipit quam id aliquid. Id voluptate consequuntur ratione totam unde reprehenderit illum inventore ex, asperiores accusantium voluptatibus laboriosam tenetur quo dolorum eaque ea? Laboriosam et rem ipsam maxime, quae incidunt cum facilis, temporibus esse, facere assumenda accusamus ipsa? Officia rem iusto consequatur laboriosam sint nihil obcaecati? Sunt odio laudantium fugiat suscipit est natus repudiandae fuga! Laborum fugit fugiat dolorum adipisci ipsam nisi, ad, atque, laudantium porro delectus excepturi dolores inventore rerum dolore impedit quam. Itaque est vel a voluptatem optio iste, deserunt recusandae esse et porro aut vitae, quibusdam libero reprehenderit assumenda! Aut vitae porro ea aliquam, minus debitis alias assumenda magnam id cum illo omnis sed totam eum autem! Eveniet modi ea vitae excepturi a deserunt dolores doloribus, recusandae quae, quibusdam molestias atque repellat adipisci facilis. Velit ipsa cumque quaerat minus totam suscipit. Quis quas iusto, amet laborum sunt vero laudantium! Optio numquam autem in delectus eius veniam molestias quidem reiciendis, ex dolore voluptate ipsum qui ratione aut alias error ducimus odio esse unde ipsam ab voluptatem dolores debitis. Rerum fugiat quis totam suscipit dolore aut iusto molestiae? Maiores id est quasi deleniti quia iure quod asperiores autem dolorum explicabo, numquam eligendi aliquam accusantium ea voluptates sequi molestias a alias sint. Sint recusandae distinctio neque ut consequuntur. Quae nam soluta suscipit dolore neque praesentium quos officiis a explicabo animi aliquid cupiditate voluptatibus nihil adipisci nesciunt ullam, culpa possimus maxime cumque. Magni, sapiente nisi id earum facilis asperiores iste aliquam voluptatem sunt itaque repellendus quidem voluptate in eveniet maxime, libero, architecto velit impedit maiores veniam! Corrupti id ipsum sapiente nihil unde impedit. Quia illo enim similique tempore iure magnam, reprehenderit accusamus sunt ea corporis a?</p>
 </div>
  <!-- include footer -->
  <?php include "Partial/_footer.php" ?>

<script src="asset/js/bootstrap.bundle.min.js"></script>
</body>
</html>