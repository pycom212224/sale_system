 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="">
     <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
     <meta name="generator" content="Hugo 0.88.1">
     <title>ระบบ SaleSystem</title>

     <script src="bootstrap/js/sweetalert2.all.min.js"></script>
     <link href="bootstrap/css/sweetalert2.min.css" rel="stylesheet">
     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
     <link href="bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet">
     <link href="bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

     <!-- Custom styles for this template -->
     <link href="navbar-top-fixed.css" rel="stylesheet">
 </head>
 <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
     <div class="container-fluid">
         <a class="navbar-brand" href="#"><i class="bi bi-graph-up"></i> SaleSystem</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
             aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarCollapse">
             <ul class="navbar-nav me-auto mb-2 mb-md-0">
                 <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="index.php"><i class="bi bi-house"></i>
                         หน้าหลัก</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#"><i class="bi bi-wrench-adjustable"></i> เกี่ยวกับเรา</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#"><i class="bi bi-phone"></i> ติดต่อผู้ดูแลระบบ</a>
                 </li>
             </ul>
             <form class="d-flex">
                 <?php if (isset($_SESSION['admin_login'])) { ?>
                 <a href="logout.php" class="btn btn-warning me-2">Logout</a>
         </div>
         <?php } else { ?>
         <a href="login.php" class="btn btn-primary"><i class="bi bi-door-closed"></i> Login</a>
         <?php } ?>
         </form>
     </div>
     </div>
 </nav>
 <style>
body {
    min-height: 75rem;
    padding-top: 3rem;
    padding-bottom: 4rem;

}
 </style>