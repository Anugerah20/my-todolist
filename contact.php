<?php 
require 'connect.php';
require 'todo.php';
?>

!DOCTYPE html>
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
                        <a href="#" class="nav-link">tambah tugas</a>
                     </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link">riwayat tugas</a>
                     </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link">tentang kami</a>
                     </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link">kontak</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
      </div>
   </section>
   <!-- END: Navigasi -->

   <div class="container">
      <div class="text-kontak">
         <h2>kontak kami</h2>
      </div>
   </div>

   
<!-- JavaScript -->
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>