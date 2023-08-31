<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OQMS-About</title>
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
 <?php include "Partial/_header.php" ?>
<?php include "Partial/_loginModal.php" ?>
<?php include "Partial/_adminModal.php" ?>
<?php include "Partial/_developerModal.php" ?>

    <!-- About-Bg-->
    <div class="container my-3">
        <div class="row">
            <div class="col">
                <img src="asset/image/logo.jpg" alt="" class="about-bg img-fluid">
            </div>
        </div>
    </div>
    <!-- Our Mission -->
    <div class="container my-4">
        <h1 class="text-center"><b>Our Mission</b></h1>
        <p class="mission-text">
            The mission of an online quiz management system is to provide a platform that allows educators and
            administrators to create, manage, and deliver quizzes and assessments to students in an efficient and
            effective manner. The system should be designed to simplify the quiz creation process, automate grading, and
            provide insights into student performance through analytics and reporting. <br><br>
            In addition to providing a seamless user experience for educators and students, an online quiz management
            system should also prioritize data security and privacy. It should adhere to industry standards for data
            protection and ensure that student information is kept confidential. <br><br>
            Ultimately, the mission of an online quiz management system is to support student learning and academic
            success by providing educators with the tools they need to create and deliver high-quality assessments,
            while also giving students the opportunity to practice and demonstrate their knowledge in a digital
            environment.
        </p>
    </div>
    <!-- Make it work -->
    <div class="container text-center">
        <div class="row">
          <div class="col">
            <h1><b>We Make it work with and for you.</b></h1>
          </div>
          <div class="row my-2">
            <div class="col">
              <p>
                Big brand with bigger goals? <br><br>
                Small business with small budget? <br><br>
                No biggie,let's work it out.
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- Our Patners -->
      <div class="container my-4">
        <h1 class="text-center">OUR PATNERS</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 my-2 px-5 mx-5">
            <div class="col">
              <div class="card">
                <img src="asset/image/M.Uzair Zulfiqar.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">M.Uzair Zulfiqar</h5>
                  <p class="card-text card-discrip">A Front-End Developer is responsible for developing new user-facing features, determining the structure and design of web pages, building reusable codes, optimizing page loading times, and using a variety of markup languages to create the web pages.</p>
                </div>
              </div>
            </div>
            <div class="col"></div>
            <div class="col">
              <div class="card">
                <img src="asset/image/fuyiz.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">M.Fuyiz Khan</h5>
                  <p class="card-text card-discrip">In short, UI/UX designers are responsible for creating an interface that is both visually appealing and easy to use while front-end developers are in charge of bringing these designs to life. Both roles are essential for a successful website.</p>
                </div>
              </div>
            </div>
          </div>
      </div>
 
       <!-- include footer -->
<?php include "Partial/_footer.php" ?>

    <script src="asset/js/bootstrap.bundle.min.js"></script>
</body>

</html>