<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>YinksDS</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: indigo;">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-2">Welcome, Admin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="admin.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="funduser.php">
          <i class="fas fa-fw fa-money-bill-wave"></i>
          <span>Fund User Wallet</span>
        </a>
       
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="dataorders.php">
          <i class="fas fa-fw fa-wifi"></i>
          <span>Data Orders</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="atcorders.php">
          <i class="fas fa-fw fa-sync"></i>
          <span>Airtime To Cash Orders</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="baorders.php">
          <i class="fas fa-fw fa-wallet"></i>
          <span>Buy Airtime Orders</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="allusers.php">
          <i class="fas fa-fw fa-user"></i>
          <span>View All Users</span>
        </a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->

       <li class="nav-item">
        <a class="nav-link collapsed" href="Transactions.php">
          <i class="fas fa-fw fa-money-bill-wave"></i>
          <span>View All Transactions</span>
        </a>
       
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="asettings.php">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Settings</span>
        </a>
       
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-fw fa-power-off"></i>
          <span>Logout</span>
        </a>
       
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">


     
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
        
          <!-- Topbar Navbar -->
         

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

           <h1 class="h3 mb-4 text-gray-800">Settings</h1>

            
             <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-9"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Update Airtime Rate</h1>
              </div>
              <form class="user">
               
                <div class="form-group">
                 
                  <select class="custom-select" required="">
                            <option value="">Select Netwok</option>
                            <option value="">MTN</option>
                            <option value="">Glo</option>
                            <option value="">9mobile</option>
                            <option value="">Airtel</option>
                       
                          </select>
                </div>
                <div class="form-group">
                  
                  <input type="number" name="amount" class="form-control form-control-user" placeholder="Enter Rate">
                </div>
                
               
                <a href="login.php" class="btn btn-primary btn-user btn-block">
                  Confirm
                </a>
               
              </form>
      
            </div>
          </div>
        </div>
      </div>
    </div>

        </div>

        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>