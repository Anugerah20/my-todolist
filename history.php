<?php 
require 'connect.php';
?>

<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>TODO</title>
   <!-- Bootstrap 5 -->
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
   <!-- CSS Custom -->
   <link rel="stylesheet" href="css/todo.css"/>
</head>
<body>
   <!-- START: Navigasi -->
   <section class="nav">
      <div class="container">
         <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
               <h1 class="navbar-brand">
                  todo
               </h1>
               <button class="navbar-toggler collapsed d-flex d-lg-none flex-column justify-content-around" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTop" aria-controls="navbarTop" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="toggler-icon top-bar"></span>
                  <span class="toggler-icon middle-bar"></span>
                  <span class="toggler-icon bottom-bar"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarTop">
                  <ul class="navbar-nav ms-auto fixed">
                     <li class="nav-item menu">
                        <a href="todo.php" class="nav-link">tambah tugas</a>
                     </li>
                     <li class="nav-item">
                        <a href="history.php" class="nav-link">riwayat tugas</a>
                     </li>
                     <li class="nav-item">
                        <a href="about.php" class="nav-link">tentang kami</a>
                     </li>
                     <li class="nav-item">
                        <a href="contact.php" class="nav-link">kontak</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
      </div>
   </section>
   <!-- END: Navigasi -->

   <!-- START: Riwayat Tugas -->
   <h2 class="text-center mt-5">riwayat tugas</h2>
   <div class="container">
      <div class="row">
         <div class="col-md-8 mx-auto mt-3">
            <div class="card border-0 shadow-lg">
               <div class="card-body">
               <h4>riwayat tugas selesai</h4>
               </div>

               <!-- START: List Selesai -->
               <!-- END: List Selesai -->

            </div>
         </div>
      </div>
       <!-- START: Riwayat Tugas -->
   </div>

   
<!-- JavaScript -->
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>