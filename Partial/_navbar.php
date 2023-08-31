<?php
echo '<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3">
<div class="container-fluid">
  <a class="navbar-brand ps-2" href="#">Dashboard</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto  mb-2 mb-lg-0  px-4" id="nav-item">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">History</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="#">Ranking</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Feedback</a>
      </li>
        <div class="nav-item">
         <a href="index.php"><button type="button" class="nav-btn btn btn-outline-light" value="Signout">Signout</button></a>
        </div>
    </ul>
  </div>
</div>
</nav>';
?>