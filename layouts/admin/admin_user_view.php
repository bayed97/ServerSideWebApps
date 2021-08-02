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
$query = "SELECT * FROM comments ORDER BY date DESC";
$result=mysqli_query($link,$query);
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
            <a href="admin_mainpage.php" class="sidebar-nav-link">
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
            <a href="admin_user_view.php" class="sidebar-nav-link active">
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

      <!-- Main Content -->
      <div class="adminx-content">
        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">User Information</li>
              </ol>
            </nav>

            <div class="pb-3">
              <h1>User Information</h1>
            </div>
            <div class="row">
              <div class="col">
                <div class="card mb-grid">
                  <!-- <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="card-header-title">
                      <a href="admin_customer_add.php" class="btn btn-sm btn-labeled-right btn-primary">
                        <span class="btn-label">
                          <span class="oi oi-person" aria-hidden="true"></span>
                        </span>
                        <span class="btn-text">
                          Add New Customer
                        </span>
                      </a>
                    </div>
                  </div> -->
                  <div class="table-responsive-md">
                    <!--<table class="table table-actions table-striped table-hover mb-0" data-table>-->
                    <table id="employee_data" class="table table-actions table-striped table-hover mb-0"> 
                        <thead>  
                            <tr>  
                                 <th>#</th>
                                 <th>Name</th>  
                                 <th>Email</th>   
                                 <th>Date</th>
                                 <th>User Agent</th>
                                 <th>Current Location</th>
                                 <th>Coordinates</th>
                                 <th>Maps</th>
                                 <th>Action</th>
                            </tr>  
                       </thead>  

                        <tbody>
                        <?php  
                       $no = 1;
                       while($row = mysqli_fetch_array($result))  
                       {  
                        ?>
                            <tr>  
                                <td><?php echo $no ;?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['date'];?></td>
                                <td><?php echo $row['user_agent'];?></td>  
                                <td><?php echo $row['location'];?></td> 
                                <td><?php echo $row['coordinates'];?></td> 
                                <td><a class="btn btn-sm btn-primary" href="https://www.google.com.my/maps/place/<?php echo $row['coordinates'];?>">Maps</a></td>   
                                <td>
                                  <a class="btn btn-sm btn-danger" href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure to delete this data?')">Delete</a>
                                </td>
                            </tr>  
                            <?php 
                      $no++ ;
                       }  
                       ?> 
                        </tbody>
                            
                     

                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- // Main Content -->
    </div>

    <!-- If you prefer jQuery these are the required scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="../../dist/js/vendor.js"></script>
    <script src="../../dist/js/adminx.js"></script>

    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script>
      $(document).ready(function() {
        var table = $('[data-table]').DataTable({
          "columns": [
            null,
            null,
            null,
            null,
            null,
            { "orderable": false }
          ]
        });

        /* $('.form-control-search').keyup(function(){
          table.search($(this).val()).draw() ;
        }); */
      });
    </script>
    <!-- If you prefer vanilla JS these are the only required scripts -->
    <!-- script src="../dist/js/vendor.js"></script>
    <script src="../dist/js/adminx.vanilla.js"></script-->
  </body>
</html>
<script>  
    $(document).ready(function(){  
         $('#employee_data').DataTable();  
    });  
    </script>  