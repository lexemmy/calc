<?php 

session_start();
include('process/indexDB.php');

$userid = $_SESSION['userid'];
$q="select fullname, wallet from users where userid ='$userid'";
$result=$conn->query($q);
$row= mysqli_fetch_array($result,MYSQLI_ASSOC);

$_SESSION['fullname'] = $row['fullname'];

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: indigo;">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fa fa-grin-wink"></i>
        </div>
        
      </a>
      <div class="mx-2" style="color: white;">Welcome, <?php echo $_SESSION['fullname'] ?></div>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="user.php">
          <i class="fa fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="buydata.php">
          <i class="fa fa-wifi"></i>
          <span>Buy Data Bundle</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="fundwallet.php">
          <i class="fa fa-credit-card
          "></i>
          <span>Fund Wallet</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="convert.php">
          <i class="fa fa-refresh"></i>
          <span>Convert Airtime</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="buyairtime.php">
          <i class="fa fa-dollar"></i>
          <span>Buy Airtime</span>
        </a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="settings.php">
          <i class="fa fa-wrench"></i>
          <span>Settings</span>
        </a>
       
      </li>

       <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="fa fa-user"></i>
          <span>Account</span>
        </a>
       
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="modal" data-target="#logoutModal">
          <i class="fa fa-power-off"></i>
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

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-bell"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">2+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header" style="background-color: indigo;">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">May 18, 20202</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">May 20, 2020</div>
                    N1,000 has been deposited into your account!
                  </div>
                </a>
                
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
           
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $row['fullname'] ?></span>
                <i class="fa fa-user"></i>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fa-user fa-sm fa mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fa-cogs fa-sm fa mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fa-list fa-sm fa mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fa-sign-out-alt fa-sm fa mr-2 text-gray-400"></i>
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
          <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

            
             <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Wallet Balance</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">N <?php echo $row['wallet'] ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-dollar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<div class="row">
             <div class="col-xl-3 col-md-6 mb-2">
              <div class="card border-left-primary shadow h-100 py-2">
                <a href="fundwallet.php">
                <div class="card-body" style="padding: 5px;">
                  <div class="row no-gutters align-items-center">
                    <div class="col">
                      
                      <div class="h6 mb-0 text-gray-800">Fund Wallet</div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-credit-card fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
                </a>
              </div>
            </div>
             <div class="col-xl-3 col-md-6 mb-2">
              <div class="card border-left-primary shadow h-100 py-2">
                <a href="buydata.php">
                <div class="card-body" style="padding: 5px;">
                  <div class="row no-gutters align-items-center">
                    <div class="col">
                      
                      <div class="h6 mb-0 text-gray-800">Buy Data Bundle</div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-wifi fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </a>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-2">
              <div class="card border-left-primary shadow h-100 py-2">
                <a href="convert.php">
                <div class="card-body" style="padding: 5px;">
                  <div class="row no-gutters align-items-center">
                    <div class="col">
                      
                      <div class="h6 mb-0 text-gray-800">Convert Airtime</div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-recycle fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </a>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-2">
              <div class="card border-left-primary shadow h-100 py-2">
                <a href="buyairtime.php">
                <div class="card-body" style="padding: 5px;">
                  <div class="row no-gutters align-items-center">
                    <div class="col">
                      
                      <div class="h6 mb-0 text-gray-800">Buy Airtime</div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-phone fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </a>
              </div>
            </div>
</div>
        </div>

        <?php

          $q="select txref,price, mobile_data, mobile_data_type, phone, status, date from data_orders where userid ='$userid'";
          $result=$conn->query($q);

          ?>




          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Transaction id</th>
                      <th>Amount</th>
                      <th>Network</th>
                      <th>Volume</th>
                      <th>Phone number</th>
                      <th>Status</th>
                      <th>Date / time</th>
                      
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                  <th>Transaction id</th>
                      <th>Amount</th>
                      <th>Network</th>
                      <th>Volume</th>
                      <th>Phone number</th>
                      <th>Status</th>
                      <th>Date / time</th>
                      
                    </tr>
                  </tfoot>
                  <tbody>

                    <?php while($row = mysqli_fetch_array($result))
                      {?>

                    <tr>
                      <td><?Php echo $row['txref']; ?></td>
                      <td><?Php echo $row['price']; ?></td>
                      <td><?Php echo $row['mobile_data']; ?></td>
                      <td><?Php echo $row['mobile_data_type']; ?></td>
                      <td><?Php echo $row['phone']; ?></td>
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
    <i class="fa-angle-up"></i>
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
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>


    <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>


</body>

</html>
