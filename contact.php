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
   <!-- CSS Custom -->
   <link rel="stylesheet" href="css/todo.css"/>
</head>
<body>
   <!-- START: Navigasi -->
   <section class="nav">

   <!-- START: Container -->
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
      <!-- END: Container -->
   </section>
   <!-- END: Navigasi -->
   <h2 class="text-center mt-5">kontak</h2>

   <!-- START: Container -->
   <div class="container">
      <div class="row">
         <div class="col-md-6 mx-auto mt-3">
            <div class="card border-0 shadow-lg">
               <div class="card-body">
               <form action="">
                  <div class="col-md-12 mx-auto mb-4">
                     <label for="inputName" class="form-label">name</label>
                     <input type="text" class="form-control" id="inputName" placeholder="input your name" 
                     required oninvalid="this.setCustomValidity('harap isi bidang ini')" oninput="this.setCustomValidity('')">
                  </div>
                  <div class="col-md-12 mx-auto mb-4">
                     <label for="inputEmail" class="form-label">email</label>
                     <input type="email" class="form-control" id="inputEmail" placeholder="input your email" 
                     required oninvalid="this.setCustomValidity('harap isi bidang ini')" oninput="this.setCustomValidity('')">
                  </div>
                  <div class="col-md-12 mx-auto mb-4">
                     <label for="inputPassword" class="form-label">password</label>
                     <input type="password" class="form-control" id="inputPassword" placeholder="input your password" 
                     required oninvalid="this.setCustomValidity('harap isi bidang ini')" oninput="this.setCustomValidity('')">
                  </div>
                  <div class="d-grid">
                     <button type="button" name="send_massage" class="btn btn-primary">kirim</button>
                  </div>
               </form>
               </div>
            </div>
         </div>

         <footer>
            <div class="copyright text-center mt-5">
               <?php echo "dibuat dengan cinta oleh Nabil - " . (int)date('Y');?>
            </div>
         </footer>
      </div>
   </div>
   <!-- END: Container -->

   
<!-- JavaScript -->
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>