<?php
session_start();
 include("../../include/config.php");

 $get_user = "select * from plans";
 $run_user = mysqli_query($connect,$get_user);
 $row_plans = mysqli_fetch_array($run_user);
 $id = $row_plans['id'];
 $name = $row_plans['name'];
 $lower = $row_plans['lower_amount'];
 $upper = $row_plans['upper_amount'];
 $percentage = $row_plans['percentage'];
 $day = $row_plans['day'];
  if(!isset($_SESSION['username']))
 {
     // not logged in
     header("location:../../admin.php");
     echo"<script>alert('This page is for admins only !')</script>";
     exit();
 }elseif(isset($_GET['logout'])){
  $yes ="
  <script type='text/javascript'>
  
  
    swal({
      title: 'LOGOUT!',
      text: 'You are logging out',
      icon: 'warning',
      button: 'Okay'
    });
  
  
  </script>";
    session_destroy();
    unset($_SESSION['username']);
    echo"
    <script>
setTimeout(function(){
   window.location.href = '../../admin.php';
}, 4000);
</script>" ;
  
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Admin Page
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
<div class="wrapper">
    <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
             
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
            Admin Page
          </a>
        </div>
       <?php include "../include/left.php";?>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
     <?php include "../include/top.php";?>
      
      <!-- End Navbar -->
      
    <div class="content">
        <div class="dash">
            <div class="container">
              
                <!-- end of row -->
                <div class="row">
       
              
                   
                  <!--end -->
                </div>
                <div class="row">
           
          <h3>Add Investment Plan</h3>
                <div class="col-lg-12">
                <form action="add_plan.php" method="POST">
                <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputEmail4">Add Plan Name</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Plan Name" name = "name" required>
                                <input type="hidden" value="<?php echo"$id";?>" name="id">
                        
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputEmail4">Add Lower Amount</label>
                                <input type="number" class="form-control" id="inputEmail4" placeholder="Enter Lower Amount" min="0" name = "lower" required>
                               
                               
                                </div>
                            </div> 
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputEmail4">Add Upper Amount</label>
                                <input type="number" class="form-control" id="inputEmail4" placeholder="Enter Upper Amount" name = "upper" required>
          
                                </div>
                            </div> 
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputEmail4">Add Percentage</label>
                                <input type="number" class="form-control" id="inputEmail4" placeholder="Enter Percentage" min='0' name = "percentage" required>
                     
                                </div>
                            </div>  
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputEmail4">Add Days</label>
                                <input type="number" class="form-control" id="inputEmail4" placeholder="Enter Days" min='1' name = "day" required>
                                <button class="btn btn-primary" name='Add'> Add </button>
                                </div>
                            </div> 
                </form>
                </div>
                </div> 
        </div>
    </div>
    <!-- end of content section -->
    <?php include "../include/footer.php";?>
    </div>
  </div>
   <?php include('../include/side.php');?>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "black-dashboard-free"
      });
  </script>
</body>

</html>