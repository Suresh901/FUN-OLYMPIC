<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Panel</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url()?>assets/admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?= base_url()?>assets/admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="<?= base_url()?>assets/admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?= base_url()?>assets/admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div>
            <div class="ps-lg-1">
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="<?= base_url()?>assets/images/logo.png" alt="logo" style = "height : 100px;"/></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="<?= base_url()?>assets/images/logo.png" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="<?= base_url()?>assets/images/logo.png" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal"><?php 

$data = $this->session->userdata('admin')  ?> 
   <a> <?php  echo $data->ad_first_name .' '. $data->ad_last_name  ?> </a></h5>
                  <span>Admin</span>
                </div>
              </div>
               
            </div>
            <li class="nav-item menu-items">
            <a class="nav-link" href="<?= base_url()?>admindash/admin">
              <span class="menu-icon">
                <i class="mdi mdi-home"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
         
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= base_url()?>admindash/users">
              <span class="menu-icon">
                <i class="mdi mdi-account"></i>
              </span>
              <span class="menu-title">Manage Users </span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= base_url()?>highlights/viewhighlight">
              <span class="menu-icon">
                <i class="mdi mdi-star"></i>
              </span>
              <span class="menu-title">Manage Highlights </span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= base_url()?>schedule/viewschedule">
              <span class="menu-icon">
                <i class="mdi mdi-calendar-clock"></i>
              </span>
              <span class="menu-title">Manage Schedule</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= base_url()?>admindash/managechat">
              <span class="menu-icon">
                <i class="mdi mdi-chat"></i>
              </span>
              <span class="menu-title">Manage Chats</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= base_url()?>gallery/image">
              <span class="menu-icon">
                <i class="mdi mdi-image"></i>
              </span>
              <span class="menu-title">Manage Gallery</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= base_url()?>admindash/messages">
              <span class="menu-icon">
                <i class="mdi mdi-video"></i>
              </span>
              <span class="menu-title">Manage Message</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= base_url()?>schedule/viewlive">
              <span class="menu-icon">
                <i class="mdi mdi-video"></i>
              </span>
              <span class="menu-title">Live Section</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
            
                      <a href="<?= base_url()?>admindash/adminlogout" class="btn btn-secondary" onclick="return confirm('Are you sure you want to Logout?');" style="margin-top: -25x">Logout</a>
                      
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
                      <div class="col-9">
                      <table class="table table-bordered">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Full Name </th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $serial = 1;



                 ?>
                <?php foreach($user as $row): 

                   $jsondata = json_encode($row);

                  ?>
                <tr>
                    <td style= "color: #ffcb4d;"><?php echo $serial++; ?></td>
                    <td style= "color: #ffcb4d;"><?php echo $row->user_fullname; ?></td>
                    <td style= "color: #ffcb4d;"><?php echo $row->user_name; ?></td>
                          <td style= "color: #ffcb4d;"><?php echo $row->email; ?></td>
                        <td> 
                        <a href="<?php echo base_url('admindash/deleteuser/'.$row->user_id); ?>" onclick="return confirm('Are you sure you want to delete this User?');" class="btn btn-success btn-sm delete">Delete</a>
                    </td>
                    <td>
                      <a href="<?= base_url('admindash/users/'.$row->user_id); ?>"  data-user='<?=$jsondata?>'  type="button" class="btn btn-primary pull-right edit-btn  " style="float:right;"data-toggle="modal" data-target="#exampleModalCenter2" id="edit_<?=$row->user_id?>">Edit
                      </a>
                    
                   </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         
        </div>
      </div>
    </div>
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
      <input type="text" name="user_fullname" id="fullname" class="form-control" style= "color: #ffcb4d;">
    </div>
    <div class="col-6">
      <label>User Name:</label>
      <input type="text" name="user_name" id="username" class="form-control" style= "color: #ffcb4d;">
      <p><img id="output3" width="200"/></p>
    </div>
   <div class="col-6">
      <label>Email:</label>
      <input type="text" id="email" name="email" class="form-control" style= "color: #ffcb4d;">
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
<script src="<?= base_url()?>assets/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url()?>assets/admin/splugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url()?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url()?>assets/admin/plugins/moment/moment.min.js"></script>

<script src="<?= base_url()?>assets/admin/dist/js/demo.js"></script>
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

