<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url()?>assets/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url()?>assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url()?>assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url()?>assets/admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url()?>assets/admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url()?>assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url()?>assets/admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url()?>assets/admin/plugins/summernote/summernote-bs4.min.css">
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}
th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;

}

.delete {
   background-color: red;
   border-color: red;
}
.save{
    background-color: burlywood;
    border-color:burlywood;
}
.change{
    text-align: center;
    padding-left: 20px;
}
.divform{
   margin-left: 500px;
   margin-bottom: 10px;
}
td.hidden {
    display: none;
}
</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?= base_url()?>assets/images/logo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->

    <ul class="navbar-nav ml-auto">
      <a href="<?= base_url()?>admindash/adlogout" class="btn btn-secondary" onclick="return confirm('Are you sure you want to Logout?');">Logout</a>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url()?>admindash/dashboard" class="brand-link">
      <img src="<?= base_url()?>assets/images/logo.png" alt=" Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Pannel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url()?>assets/images/logo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block" ><?php 

                                        $data = $this->session->userdata('admin')  ?> 
                                           <a> <?php  echo $data->ad_first_name .' '. $data->ad_last_name  ?> </a>
                                       </button>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="<?= base_url()?>schedule/viewschedule" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Schedule</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url()?>admindash/user" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url()?>gallery/image" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gallery</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url()?>highlights/viewhighlight" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Highlights</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url()?>admindash/messages" class="nav-link active ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Messages</p>
                </a>
              </li>
             <li class="nav-item">
                <a href="<?= base_url()?>schedule/viewlive" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Live Games</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?= base_url()?>admindash/managechats" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Chats</p>
                </a>
              </li>
            </ul>
          </li> 
         </aside>
         <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>
    </div>
<div class="content">
      <div class="container-fluid">
        <div class="row">
                <div class="card-body">
                <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Name </th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $serial = 1;



                 ?>
                <?php foreach($message as $row): 

                   $jsondata = json_encode($row);

                  ?>
                <tr>
                    <td class="hidden"><?php echo $row->user_id; ?></td>
                    <td><?php echo $serial++; ?></td>
                    <td><?php echo $row->name; ?></td>
                          <td><?php echo $row->email; ?></td>
                           <td><?php echo $row->subject; ?></td>
                           <td><?php echo $row->message; ?></td>
                        <td> 
                        <a href="<?php echo base_url('admindash/deletemessage/'.$row->id); ?>" onclick="return confirm('Are you sure you want to delete this Message?');" class="btn btn-success btn-sm delete">Delete</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2023 <a>Fun Olympics</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
    </div>
  </footer>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- Button trigger modal -->

<!-- Modal -->

<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Update Users</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="<?php echo base_url('admindash/updateuser/'.$row->user_id); ?>" method="POST">
  <div class="row">
      <input type="hidden" name="user_id" id="user_id">
    <div class="col-6">
      <label>Full Name:</label>
      <input type="text" name="user_fullname" id="fullname" class="form-control">
    </div>
    <div class="col-6">
      <label>User Name:</label>
      <input type="text" name="user_name" id="username" class="form-control">
      <p><img id="output3" width="200"/></p>
    </div>
   <div class="col-6">
      <label>Email:</label>
      <input type="text" id="email" name="email" class="form-control">
    </div>
  </div>
  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
</form>
      </div>
      
    </div>
  </div>
</div>


<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url()?>assets/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url()?>assets/admin/splugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- <script>
  $.widget.bridge('uibutton', $.ui.button)
</script> -->
<!-- Bootstrap 4 -->
<script src="<?= base_url()?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url()?>assets/admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url()?>assets/admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url()?>assets/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url()?>assets/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url()?>assets/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url()?>assets/admin/plugins/moment/moment.min.js"></script>
<script src="<?= base_url()?>assets/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url()?>assets/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url()?>assets/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url()?>assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url()?>assets/admin/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url()?>assets/admin/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url()?>assets/admin/dist/js/pages/dashboard.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.4.0/js/bootstrap.bundle.min.js"></script>

<script>
  $(document).ready(function (){
    var msg = "<?= $this->session->flashdata('message')?>";
    if(msg !==''){
         Swal.fire(
  'Success!',
   msg,
  'success',
);
    }
  });
</script>


      <script>
  $(document).ready(function() {
  $('.edit-btn').click(function() {
    var thisdata = $(this).data('user');

    $('#fullname').val(thisdata.user_fullname);
    $('#username').val(thisdata.user_name);
    $('#email').val(thisdata.email);
    $('#user_id').val(thisdata.user_id);
  });
});
</script>
</body>
</html>
