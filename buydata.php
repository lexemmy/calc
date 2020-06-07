

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
  <link href="css/sb-admin-2.css" rel="stylesheet">


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
        
      </a>
      <div class="mx-2" style="color: white;">Welcome, <?php echo $_SESSION['fullname'] ?></div>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

     
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="Dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
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
        <a class="nav-link collapsed" href="#">
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

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
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
                      <i class="fas fa-file-alt text-white"></i>
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
                      <i class="fas fa-donate text-white"></i>
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
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['fullname'] ?></span>
                <i class="fas fa-fw fa-user"></i>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
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
          <h1 class="h3 mb-4 text-gray-800">Buy Data</h1>

            
             <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-9"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Buy Data</h1>
              </div>
                <div id="display2" class="text-center"></div>
                  <form id="form" class="user">
                <div class="form-group">
                    <select id="mobile_data" class="custom-select" id="operator" required="">
                            <option value="">Select Mobile Network</option>
                       
                          </select>
                  
                </div>
              
                <div class="form-group">
                  <select id="mobile_data_type" class="custom-select" id="operator" required="">
                            <option value="">Select Mobile Data Volume</option>
                       
                          </select>
                </div>
                <div class="form-group">
                  <input type="number" class="form-control form-control-user" id="phone" placeholder="Your Phone Number" required="">
                </div>
                <div class="form-group">
                  <input disabled value="" type="text" class="form-control form-control-user" id="mobile_data_amount" placeholder="Amount">
                </div>
               <button id="PurchaseMobileData" class="btn btn-primary btn-user btn-block">Buy Data</button>
               
               
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


       <script>

        
    var mobile_datas = [
      {id: 0, name: "MTN SME", },
      {id: 1, name: "MTN GIFTING", },
      {id: 2, name: "GLO", },
      {id: 3, name: "Airtel"},
      {id: 4, name: "9mobile"},
    ];
  
    var mobile_data_types = [
      {id:'0',mobile_data_id:'0',name:"MTN 1GB",validity:"30",amount:"330"},
      {id:'1',mobile_data_id:'0',name:"MTN 2GB",validity:"30",amount:"660"},
      {id:'2',mobile_data_id:'0',name:"MTN 3GB",validity:"30",amount:"990"},
      {id:'3',mobile_data_id:'0',name:"MTN 5GB",validity:"30",amount:"1650"},
      {id:'4',mobile_data_id:'1',name:"MTN 6GB",validity:"30",amount:"2375"},
      {id:'5',mobile_data_id:'1',name:"MTN 8GB",validity:"30",amount:"2850"},
      {id:'6',mobile_data_id:'1',name:"MTN 10GB",validity:"30",amount:"3400"},
      {id:'7',mobile_data_id:'1',name:"MTN 15GB",validity:"30",amount:"4850"},
      {id:'8',mobile_data_id:'2',name:"GLO 1GB",validity:"14",amount:"450"},
      {id:'9',mobile_data_id:'2',name:"GLO 2.3GB",validity:"30",amount:"900"},
      {id:'10',mobile_data_id:'2',name:"GLO 4.1GB",validity:"30",amount:"1350"},
      {id:'11',mobile_data_id:'2',name:"GLO 5.8GB",validity:"30",amount:"1800"},
      {id:'12',mobile_data_id:'2',name:"GLO 7.7GB",validity:"30",amount:"2350"},
      {id:'13',mobile_data_id:'2',name:"GLO 10GB",validity:"30",amount:"2700"},
      {id:'14',mobile_data_id:'2',name:"GLO 13.25GB",validity:"30",amount:"3600"},
      {id:'15',mobile_data_id:'2',name:"GLO 18.25GB",validity:"30",amount:"4500"},
      {id:'16',mobile_data_id:'2',name:"GLO 29.5GB",validity:"30",amount:"7200"},
      {id:'17',mobile_data_id:'3',name:"Airtel 1.5GB",validity:"30",amount:"900"},
      {id:'18',mobile_data_id:'3',name:"Airtel 2GB",validity:"30",amount:"1080"},
      {id:'19',mobile_data_id:'3',name:"Airtel 3GB",validity:"30",amount:"1350"},
      {id:'20',mobile_data_id:'3',name:"Airtel 4.5GB",validity:"30",amount:"1800"},
      {id:'21',mobile_data_id:'3',name:"Airtel 6GB",validity:"30",amount:"2250"},
      {id:'22',mobile_data_id:'3',name:"Airtel 8GB",validity:"30",amount:"2700"},
      {id:'23',mobile_data_id:'3',name:"Airtel 11GB",validity:"30",amount:"3600"},
      {id:'24',mobile_data_id:'4',name:"9mobile 1.5GB",validity:"30",amount:"900"},
      {id:'25',mobile_data_id:'4',name:"9mobile 2GB",validity:"30",amount:"1100"},
      {id:'26',mobile_data_id:'4',name:"9mobile 4.5GB",validity:"30",amount:"1800"},
      {id:'27',mobile_data_id:'4',name:"9mobile 11GB",validity:"30",amount:"3600"},
      {id:'28',mobile_data_id:'4',name:"9mobile 15GB",validity:"30",amount:"4500"},
  
    ];
  function GenerateHtmlOptionTag(array, placeholder = null){
      var output = '<option value="undefined">Click to Select</option>';
  
      if(placeholder != null){
         var output = '<option value="undefined">'+placeholder+'</option>';
      }
  
      array.forEach(function(item){
        output += '<option value="'+item["id"]+'">'+item["name"]+'</option>'
      });
      return output;
  }
  
  function IsValidDataEntry(param){
      if( param == null || param == "undefined" || param.trim() == "" ){
         return true;
      }
  
      return false;
  }
  
  $("#mobile_data").html(GenerateHtmlOptionTag(mobile_datas,"Select Mobile Data"));
  
  $("#mobile_data").change(function(){
    console.log($("#mobile_data_type").val());
     var output = "";
     filtered_data = mobile_data_types.filter(function(mobile_data_type){
        return mobile_data_type['mobile_data_id'] == $("#mobile_data").val();
     });
     console.log($("#mobile_data").val());
     $('#mobile_data_type').html(GenerateHtmlOptionTag(filtered_data,"Select Mobile Data Type"));
  });
  
  //set the amount on the DOM
  $("#mobile_data_type").change(function(){
    var amount = mobile_data_types[$("#mobile_data_type").val()].amount;
  
    $('#mobile_data_amount').val("₦"+amount);
  });



  
  $("#PurchaseMobileData").click(function(){

    var mobile_data = $("#mobile_data").val();
    var mobile_data_type = $("#mobile_data_type").val();
    var mobile_data_amount = $("#mobile_data_amount").val();
    var phone = $("#phone").val();

    if(IsValidDataEntry(phone) ){
      alert('Error! please enter a valid input');
      return;
    }


      purchase_data = {
      
      'price':  mobile_data_types[mobile_data_type].amount,
      'mobile_data': mobile_datas[mobile_data].name,
      'mobile_data_type_name': mobile_data_types[mobile_data_type].name,
      'phone': phone
    }


  
      $.ajax({
              type: "POST",
              url: "proces.php",
              data:{myData:purchase_data},
              success: function(d){
                console.log(d);
               alert(d);
              }
          });
  
  
  });



 
  
   
  


      </script>
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
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
