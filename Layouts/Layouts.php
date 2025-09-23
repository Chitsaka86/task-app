<?php
class Layouts {
    public function header($conf) {
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Astro v5.13.2">
      <title><?php echo $conf['site_name']; ?> · Bootstrap v5.3</title>

      <!-- Bootstrap CSS -->
      <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet">

      <!-- Bootstrap Icons -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

      <meta name="theme-color" content="#712cf9">
   </head>
<?php
    }

    public function navbar($conf) {
?>
   <body>
      <main>
         <div class="container py-4">
            <header class="pb-3 mb-4 border-bottom">
               <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Main navbar">
                  <div class="container-fluid">
                     <a class="navbar-brand fw-bold" href="./"><?php echo $conf['site_name']; ?></a> 
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                     </button> 
                     <div class="collapse navbar-collapse" id="navbarsExample05">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                           <li class="nav-item"><a class="nav-link active" aria-current="page" href="./">Home</a></li>
                           <li class="nav-item"><a class="nav-link" href="signup.php">Sign Up</a></li>
                           <li class="nav-item"><a class="nav-link" href="signin.php">Sign In</a></li>
                        </ul>
                        <form role="search" class="d-flex">
                           <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                           <button class="btn btn-outline-light" type="submit"><i class="bi bi-search"></i></button>
                        </form>
                     </div>
                  </div>
               </nav>
            </header>
<?php
    }

    public function banner($conf) {
?>
         <div class="p-5 mb-4 bg-body-tertiary rounded-3">
            <div class="container-fluid py-5">
               <h1 class="display-5 fw-bold">Welcome to <?php echo $conf['site_name']; ?></h1>
               <p class="col-md-8 fs-4">Your platform to explore and manage accounts with ease. Sign up today and get started!</p>
               <a href="signup.php" class="btn btn-primary btn-lg">Get Started</a>
            </div>
         </div>
<?php
    }

    public function content($conf) {
?>
         <div class="row align-items-md-stretch">
            <div class="col-md-6">
               <div class="h-100 p-5 text-bg-dark rounded-3">
                  <h2>Dark Section</h2>
                  <p>Swap background-color utility and mix in text utilities for more customization.</p>
                  <button class="btn btn-outline-light" type="button">Learn more</button> 
               </div>
            </div>
            <div class="col-md-6">
               <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                  <h2>Light Section</h2>
                  <p>Keep it light and add a border for some added definition to your content area.</p>
                  <button class="btn btn-outline-secondary" type="button">Learn more</button> 
               </div>
            </div>
         </div>
<?php
    }

    public function form_content($conf, $ObjForm, $ObjFncs) {
?>
         <div class="row align-items-md-stretch">
            <div class="col-md-6">
               <div class="h-100 p-5 text-bg-light rounded-3">
                  <?php 
                     if (basename($_SERVER['PHP_SELF']) == 'signup.php') { 
                         $ObjForm->signup($conf, $ObjFncs); 
                     } else { 
                         $ObjForm->signin($conf,$ObjForm, $ObjFncs); 
                     } 
                  ?>
               </div>
            </div>
            <div class="col-md-6">
               <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                  <h2>Why Join Us?</h2>
                  <p>Get access to exclusive features by creating an account today. Already a member? Just sign in!</p>
                  <a href="signup.php" class="btn btn-outline-primary">Join Now</a>
               </div>
            </div>
         </div>
<?php
    }

    public function footer($conf) {
?>
            <footer class="pt-3 mt-4 text-body-secondary border-top text-center">
               <p>Copyright &copy; <?php echo date("Y") . " " . $conf['site_name']; ?>. All rights reserved.</p>
            </footer>
         </div>
      </main>

      <!-- Bootstrap Bundle with Popper -->
      <script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js"></script>
   </body>
</html>
<?php
    }
    
}

