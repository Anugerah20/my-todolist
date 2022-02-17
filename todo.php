<?php 
include 'connect.php';

?>

<!DOCTYPE html>
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

   <!-- START: Tambah Tugas -->
   <h2 class="text-tambah">tambah tugasmu!</h2>
   <div class="container">
      <div class="row">
         <div class="col-md-8 mx-auto mt-3">
            <div class="card border-0 shadow-lg">
               <div class="card-body">
                  <h4>form todolist</h4>
                  <form method="POST">
                     <div class="form-group">
                        <input type="text" class="form-control" name="job_name" placeholder="tulis tugasmu disini" required oninvalid="this.setCustomValidity('harap isi bidang ini')" oninput="this.setCustomValidity('')"/>
                     </div>
                     <div class="form-group d-grid mt-3">
                        <button class="btn btn-primary" name="send">tambah tugas</button>
                     </div>
                  </form>

                  <!-- START: List Tugasmu -->
                  <div class="form-group mt-3">
                     <h4>list tugasmu</h4>
                     <ul class="list-group mb-3">
                        <li class="list-group-item">
                           Belajar masak
                        <div class="float-end">
                           <a href="#" class="mx-3">selesai</a>
                           <a href="#">hapus</a>
                        </div>
                        </li>
                     </ul>
                  </div>
                  <!-- END: List Tugasmnu -->
               </div>
            </div>
         </div>
      </div>
      <!-- END: Tambah Tugas -->
   </div>

   
<!-- JavaScript -->
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>