<?php
// require_once('session.php');

session_start();
if(isset($_SESSION['role']))
{
    if($_SESSION['role'] != 'admin')
    {
      header('Location:../../index.php');
    }
}else{
    header('Location:../../index.php');
}

include '../../db.php';
$sql2 = "SELECT COUNT(*) AS totaluser FROM comments"; 
$result2 = mysqli_query($link, $sql2);
$row2=mysqli_fetch_array($result2);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Show Me Hospital</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="../../dist/css/adminx.css" media="screen" />

    <!--datatables--> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script> 
           <!--
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
          <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" /> 
           -->

    <!--datatables-->
  </head>
  <body>
    <div class="adminx-container">
      <!-- Header -->
      <nav class="navbar navbar-expand justify-content-between fixed-top">
        <a class="navbar-brand mb-0 h1 d-none d-md-block" href="">
          <img src="../../demo/img/logo.png" class="navbar-brand-image d-inline-block align-top mr-2" alt="">
           Show Me Hospital
        </a>

        <div class="d-flex flex-1 d-block d-md-none">
          <a href="#" class="sidebar-toggle ml-3">
            <i data-feather="menu"></i>
          </a>
        </div>

        <ul class="navbar-nav d-flex justify-content-end mr-2">
          <!-- Notifications -->
          <li class="nav-item dropdown">
            <a class="nav-link avatar-with-name" id="navbarDropdownMenuLink" data-toggle="dropdown" href="#">
              <img src="profile.png" class="d-inline-block align-top" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <!--<a class="dropdown-item" href="#">My Profile</a>-->
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-danger" href="../../logout.php">Sign out</a>
            </div>
          </li>
        </ul>
      </nav>
      <!-- // Header -->

      <!-- expand-hover push -->
      <div class="adminx-sidebar expand-hover push" id="sidebar">
        <ul class="sidebar-nav">
          <li class="sidebar-nav-item">
            <a href="admin_mainpage.php" class="sidebar-nav-link active">
              <span class="sidebar-nav-icon">
                <i data-feather="home"></i>
              </span>
              <span class="sidebar-nav-name">
                Dashboard
              </span>
              <span class="sidebar-nav-end">
              </span>
            </a>
          </li>

          <li class="sidebar-nav-item">
            <a href="admin_user_view.php" class="sidebar-nav-link">
              <span class="sidebar-nav-icon">
                <i data-feather="layout"></i>
              </span>
              <span class="sidebar-nav-name">
                User Information
              </span>
              <span class="sidebar-nav-end">
              </span>
            </a>
          </li>

        </ul>
      </div>

      <!-- adminx-content-aside -->
      <div class="adminx-content">
        <!-- <div class="adminx-aside">

        </div> -->

        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
              </ol>
            </nav>

            <div class="pb-3">
              <h1>Dashboard</h1>
            </div>

            <div class="row">
             
              

              <div class="col-md-6 col-lg-3 d-flex">
                <div class="card border-0 bg-primary text-white text-center mb-grid w-100">
                  <div class="d-flex flex-row align-items-center h-100">
                    <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                      <i data-feather="users"></i>
                    </div>
                    <div class="card-body">
                      <div class="card-info-title">Total User</div>
                      <h3 class="card-title mb-0">
                      <?php echo $row2['totaluser'];?>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>

              

          </div>
        </div>
      </div>
    </div>

    <!-- If you prefer jQuery these are the required scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="../../dist/js/vendor.js"></script>
    <script src="../../dist/js/adminx.js"></script>

    <!-- If you prefer vanilla JS these are the only required scripts -->
    <!--script src="./dist/js/vendor.js"></!--script>
    <script src="./dist/js/adminx.vanilla.js"></script-->
  </body>
</html>