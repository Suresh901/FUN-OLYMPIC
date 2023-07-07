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
          <a class="sidebar-brand brand-logo" href="index.html"><img src="<?= base_url()?>assets/images/logo.png" alt="logo" style="height:100px" /></a>
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
      <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Message</h1>
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
                    
                    <td style= "color: #ffcb4d;"><?php echo $serial++; ?></td>
                    <td style= "color: #ffcb4d;"><?php echo $row->name; ?></td>
                          <td style= "color: #ffcb4d;"><?php echo $row->email; ?></td>
                           <td style= "color: #ffcb4d;"><?php echo $row->subject; ?></td>
                           <td style= "color: #ffcb4d;"><?php echo $row->message; ?></td>
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
        <button type="submit" class="btn btn-primary">Save changes</button>
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

