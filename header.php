<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
    <script src="js/main.js"></script>
  
 <!--  <script src="js/dashboard.js"></script> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0  d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="header.php"><img src="images/Patient_Ink.png" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="header.php"><img src="images/Patient_Ink.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch navright">
       
        <ul class="navbar-nav navbar-nav-right ">

           <li class="nav-item  d-none d-lg-block">
            <a class="nav-link" href="#">
              <span class="menu-title"><i class="far fa-life-ring"></i> Support </span>
            </a>
          </li>
          


          <li class="nav-item nav-settings d-none d-lg-block">
            <a class="nav-link" href="setting.php">
              <span class="menu-title"><i class="fas fa-users-cog"></i> Settings </span>
            </a>
          </li>
          
          
            <li class="nav-item nav-logout d-none d-lg-block">
            <a class="nav-link" href="#">
              <span class="menu-title"><i class="fas fa-power-off"></i> Logout</span>
          
            </a>
          </li>

 <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>

       
         
        </ul>
        <!-- <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button> -->
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php" >
              <span class="menu-title"><i class="fas fa-tachometer-alt "></i> Dashboard</span>
              <!-- <i class="fa fa-home menu-icon "></i> -->
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link pat" data-toggle="collapse" href="#patient" aria-expanded="false" aria-controls="patient">
              <span class="menu-title"> <i class="fas fa-user-injured"></i> Patients</span>
              <i class="menu-arrow patmenu"></i>
              
            </a>
            <div class="collapse" id="patient">
              <ul class="nav flex-column sub-menu " >
                <li class="nav-item"> <a class="nav-link" href="add_patients.php">New Registration</a></li>
                <li class="nav-item"> <a class="nav-link" href="patients_list.php">View History</a></li>
              </ul>
            </div>
          </li>


          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#forms" aria-expanded="false" aria-controls="forms">
              <span class="menu-title"><i class="fab fa-wpforms "></i> Forms</span>
              <i class="menu-arrow formmenu"></i>
              
            </a>
            <div class="collapse" id="forms">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="form_modules.php">View </a></li>
                <li class="nav-item"> <a class="nav-link" href="view_form.php">Search</a></li>
              </ul>
            </div>
          </li>


          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#Messaging" aria-expanded="false" aria-controls="Messaging">
              <span class="menu-title"> <i class="fas fa-sms"></i> Messaging</span>
              <i class="menu-arrow msgmenu"></i>
              
            </a>
            <div class="collapse" id="Messaging">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#">Text Inbox</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Bulk Text Campaign</a></li>
                
              </ul>
            </div>
          </li>
          

           <li class="nav-item">
            <a class="nav-link" href="#" >
              <span class="menu-title"><i class="fab fa-slideshare "></i> Benefits</span>
            
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#" >
              <span class="menu-title"><i class="fa fa-file-invoice menu-icon "></i> eStatements</span>
            
            </a>
          </li>
          
         
          
         
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
         
         
          
         
         
          
