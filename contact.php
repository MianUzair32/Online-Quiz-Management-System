<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OQMS-Contact Us</title>
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

    <!-- Contact-Form-Start -->
    <div class="container my-4 contact-form">
        <form action="">
            <fieldset>
                <div class="row my-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First name" aria-label="First name"
                            id="firstname">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name"
                            id="lastname">
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" placeholder="name@example.com">
                    <label for="floatingInputInvalid">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="password" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating my-3">
                    <input type="number" class="form-control" id="phone" placeholder="Mobile No.">
                    <label for="floatingNumber">Mobile No.</label>
                </div>
                <div class="form-floating my-3">
                    <textarea class="form-control" placeholder="Leave a comment here" id="message"></textarea>
                    <label for="floatingTextarea">Comments</label>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="Check">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary" onclick="whatsapp();">Submit</button>
                <!-- Captecha -->

            </fieldset>
        </form>
    </div>
    
    <!-- include footer -->
<?php include "Partial/_footer.php" ?>

    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script>
        function whatsapp() {
            let firstname = document.getElementById("firstname").value;
            let lastname = document.getElementById("lastname").value;
            let email = document.getElementById("email").value;
            let password = document.getElementById("password").value;
            let phone = document.getElementById("phone").value;
            let message = document.getElementById("message").value;
            let Check = document.getElementById("Check").value;

            let url = "https://wa.me/+923077768525?text="
                + "FirstName : " + firstname + "%0a"
                +  "LastName : " + lastname + "%0a"
                +   "Email : " + email + "%0a"
                + "Email : " + email + "%0a"
                + "Password : " + password + "%0a"
                + "Phone : " + phone
                + "Message : " + message + "%0a";

            window.open(url, '_blank').focus();
        }
    </script>
</body>

</html>