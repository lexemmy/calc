<?php 

session_start();
include('process/indexDB.php');
include('functions/alert.php');

if(!isset($_SESSION['role'])){
    header('location: login.php');
}

$userid = $_SESSION['userid'];

?>

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
  <script src="https://kit.fontawesome.com/4ea96ace4f.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">
<script src="vendor/jquery/jquery.min.js"></script>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient sidebar sidebar-dark accordion toggled" id="accordionSidebar" style="background-color: indigo;">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-2">Welcome, <?php echo $_SESSION['fullname'] ?></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="buydata.php">
          <i class="fas fa-fw fa-wifi"></i>
          <span>Buy Data Bundle</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="fundwallet.php">
          <i class="fas fa-fw fa-wallet"></i>
          <span>Fund Wallet</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="convert.php">
          <i class="fas fa-fw fa-sync"></i>
          <span>Convert Airtime</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="buyairtime.php">
          <i class="fas fa-fw fa-money-bill-wave"></i>
          <span>Buy Airtime</span>
        </a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link collapsed" href="settings.php">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Settings</span>
        </a>
       
      </li>

       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-user"></i>
          <span>Account</span>
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
          <ul class="navbar-nav ml-auto">

           
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">User name</span>
                <i class="fas fa-fw fa-user"></i>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="settings.php">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
               
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Purchase Airtime</h1>

            
             <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-9"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Purchase Airtime</h1>
              </div>
              <form class="user" method="POST" action="process/pbuyairtime.php">
                <div class="form-group">
                  <p><?php  print_alert(); ?></p>
                   <select class="custom-select" name="network" required="">
                            <option>Select Network</option>
                            <option value="mtn">MTN</option>
                            <option value="glo">Glo</option>
                            <option value="9m0bile">9mobile</option>
                            <option value="Airtel">Airtel</option>
                       
                          </select>
                   
                </div>
              
                <div class="form-group">
                  <label>Enter Amount</label>
                  <input type="number" name="amount" class="form-control form-control-user" placeholder="Min N100">
                </div>
                <div class="form-group">
                  <label>Phone Number</label>
                  <input type="number" name="number" class="form-control form-control-user" placeholder="08********">
                </div>
                
               
                <button class="btn btn-primary btn-user btn-block"> Submit</button>
               
              </form>
      
            </div>
          </div>
        </div>
      </div>
    </div>

        </div>

 <?php

          $q="select txref,network, phone_number, amount, status, date from buy_airtime where userid ='$userid'";
          $result=$conn->query($q);

          ?>




          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">History</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Transaction id</th>
                      <th>Network</th>
                      <th>Phone Number</th>
                      <th>Amount</th>
                      <th>Status</th>
                      <th>Date/Time</th>
                      
                      
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                   <th>Transaction id</th>
                      <th>Network</th>
                      <th>Phone Number</th>
                      <th>Amount</th>
                      <th>Status</th>
                      <th>Date/Time</th>
                      
                    </tr>
                  </tfoot>
                  <tbody>

                    <?php while($row = mysqli_fetch_array($result))
                      {?>

                    <tr>
                      <td><?Php echo $row['txref']; ?></td>
                      <td><?Php echo $row['network']; ?></td>
                      <td><?Php echo $row['phone_number']; ?></td>
                      <td><?Php echo $row['amount']; ?></td>
                      <td><?Php echo $row['status']; ?></td>
                      <td><?Php echo $row['date']; ?></td>
                      
                      
                    </tr>
                   <?php }$conn->close();?>
                    
                  </tbody>
                </table>
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
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
