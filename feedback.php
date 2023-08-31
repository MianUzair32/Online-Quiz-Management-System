<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OQMS-Feedback</title>
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

  <!-- Feedback-form -->
  <div class="container my-4 feed-form ">
    <form action="" onsubmit="sendEmail(); reset(); return false;">
      <h1 class="text-center">Give Your Feedback</h1>
      <h1 class="my-4">How do you rate your overall experience?</h1>
      <div class="form-check form-check-inline my-2">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Radio1" value="option1">
        <label class="form-check-label" for="inlineRadio1">Bad</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Radio2" value="option2">
        <label class="form-check-label" for="inlineRadio2">Average</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Radio3" value="option3">
        <label class="form-check-label" for="inlineRadio3">Good</label>
      </div>

      <div class="row g-3 my-2">
        <div class="col">
          <label for="exampleFormControlTextarea1" class="form-label">Name:</label>
          <input type="text" class="form-control" placeholder="Enter name" aria-label="Enter name" id="name">
        </div>
        <div class="col">
          <label for="exampleFormControlTextarea1" class="form-label">Email:</label>
          <input type="email" class="form-control" placeholder="Enter Email" aria-label="Enter Email" id="email">
        </div>
      </div>
      <div class="row g-3 my-2">
        <div class="col">
          <label for="exampleFormControlTextarea1" class="form-label">Age:</label>
          <input type="age" class="form-control" placeholder="Enter Age" aria-label="Enter Age" id="age">
        </div>
        <div class="col">
          <label for="exampleFormControlTextarea1" class="form-label">Phone No.</label>
          <input type="number" class="form-control" placeholder="Phone No" aria-label="Phone No" id="phone">
        </div>
      </div>
      <div class="mb-3 my-3">
        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
        <textarea class="form-control" id="message" rows="3" placeholder="Message"></textarea>
      </div>
      <button type="submit" class="btn btn-primary feed-btn">Submit</button>

    </form>
  </div>

 <!-- include footer -->
<?php include "Partial/_footer.php" ?>

  <script src="asset/js/bootstrap.bundle.min.js"></script>
  <script src="https://smtpjs.com/v3/smtp.js"></script>
  <script>
    function sendEmail() {
      Email.send({
      SecureToken: "39597797-603f-46ed-ac40-5d0d7d0d6e67",
        To: 'uzairmian395@gmail.com',
        From: document.getElementById("email").value,
        Subject: "New Contact Form Enquiry",
        Body: "Radio1:" + document.getElementById("Radio1").value
        + "<br> Radio2:" + document.getElementById("Radio2").value
        + "<br> Radio3:" + document.getElementById("Radio3").value
        + "<br> Name:" + document.getElementById("name").value
        + "<br> Email:" + document.getElementById("email").value
        + "<br> Age:" + document.getElementById("age").value
        + "<br> Phone no:" + document.getElementById("phone").value
        + "<br> Message:" + document.getElementById("message").value

      }).then(
        message => alert("Message Sent Successfully!")
      );
    }
  </script>
</body>

</html>