<?php 
require 'connect.php';
?>

<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>TODO - lebih produktif</title>
   <!-- Bootstrap 5 -->
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
   <!-- CSS todo -->
   <link rel="stylesheet" href="css/todo.css"/>
   <!-- CSS about -->
   <link rel="stylesheet" href="css/about.css"/>
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

   <!-- START: Tentang Kami -->
   <div class="text-about">
      <h2>tentang kami</h2>
   </div>
   <div class="container">
      <div class="row">
         <div class="col-md-8 mx-auto mt-3">
            <div class="card shadow-lg border-0">
               <div class="card-body">
                  <h4 class="text-todo">todo web</h4>
                  <div class="card-title">
                     <p class="text-link">todo web dibuat oleh <a href="https://instagram.com/anugerah_est/" target="_blank">nabil anugerah</a> tujuan saya membuat ini adalah untuk mempermudah anda dalam mencatat setiap aktifitas pekerjaan atau tugas anda supaya aktifitas anda dapat terstruktur dengan baik.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- END: Tentang Kami -->
   
<!-- JavaScript -->
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>