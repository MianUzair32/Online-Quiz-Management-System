<?php
echo '  <!-- Header-Start -->
<header class="p-3 bg-dark text-secondary">
  <div class="container-fluid">
    <div class="row">
      <div class="col" id="nav">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src="asset/image/logo.jpg" alt="" width="50px" height="50px">
        </a>
      </div>
      <div class="col-8 ">
        <ul class="nav col-12 col-md-auto me-lg-auto mb-2 justify-content-center mb-md-0 ml-auto ">
          <li><a href="index.php" class="nav-link active px-2">Home</a></li>
          <li><a href="#" class="nav-link px-2" data-bs-toggle="modal" data-bs-target="#adminmodal">Admin</a></li>
          <li><a href="#" class="nav-link px-2" data-bs-toggle="modal" data-bs-target="#developerModal">Developer</a>
          </li>
          <li><a href="about.php" class="nav-link px-2">About</a></li>
          <li><a href="feedback.php" class="nav-link px-2">Feedback</a></li>
          <li><a href="contact.php" class="nav-link px-2">Contact Us</a></li>
        </ul>
      </div>
      <div class="col my-2">
        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2" data-bs-toggle="modal"
            data-bs-target="#loginModal">Login</button>
          <!-- <button type="button" class="btn btn-warning">Login</button> -->
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Header-End -->';
 include "Partial/_loginModal.php" ;
 include "Partial/_adminModal.php" ;
 include "Partial/_developerModal.php" ;
  if ($showError != 'false') { 
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
  <strong>Success! </strong> Email is Already use!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if (isset($showAlert)) { 
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
  <strong>Success! </strong> Your registered Successfully!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>