<?php include "include/admin_process.php";
     
if(!isset($_GET['change'])){
    $changed = "";
}else{
    $changed = "<div class='alert alert-success'>
    <strong>LOGINS RESET:</strong> Username: admin <br> Password : admin
  </div>";
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from <?php echo"$site_name3";?>.uk/admin by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Mar 2021 13:17:13 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo"$site_name3";?> - Admin Login</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logoIcon/favicon.png"/>
      <link rel="stylesheet" href="assets/admin/css/signin.css">
  
  <link rel="stylesheet" href="assets/admin/css/dashboard.min.css">
  <link rel="stylesheet" href="assets/admin/css/custom.css">

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>
<body>
  <div class="signin-section pt-5" style="background-image: url('assets/images/login.html');">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
        <div class="col-xl-4 col-md-6 col-sm-8">
            <div class="login-area">
                <div class="login-header-wrapper text-center">
                    <img class="logo" src="assets/images/logo2.png" alt="image">
                    <p class="text-center admin-brand-text">Admin Pannel</p>
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="login-form">
              <?php echo"$fail";?> 
              <?php echo"$changed";?>
              <?php echo"$username_err";?>                <div class="login-inner-block">
                        <div class="frm-grp">
                            <label>Username</label>
                            <input type="text" name="username" value="" placeholder="Enter your username">
                        </div>
                        <?php echo"$password_err";?>
                        <div class="frm-grp">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Enter your password">
                        </div>
                    </div>
                    <div class="d-flex mt-3 justify-content-between">
                        <div class="frm-group">
                          <a href="index.php" class="btn btn-warning">Go to Home page</a>
                        </div>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Reset Login Details?</button> 
                          <!-- start of modal -->
        <div  class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Reset Admin Logins</h5>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <i class="tim-icons icon-simple-remove"></i>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to reset your admin logins?.</p>
      </div>
      <div class="modal-footer">
     
        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
        <a href="include/forgot_password.php" class="btn btn-primary"  name="forgot">Yes<a>
      </div>
    </div>
  </div>
</div>
                            <!-- end of modal -->
                    </div>
                    <div class="btn-area text-center">
                    <button type="submit" class="submit-btn">Login now</button>
                    </div>
                </form>
            </div>
        </div>
        
        </div>
    </div>
</div>

  <script src="assets/admin/js/dashboard.min.js"></script>
  <script src="assets/admin/js/main.js"></script>
  
  <!-- Load toast -->
  <!-- Toastr -->
    <link rel="stylesheet" href="assets/admin/css/toastr.min.css">
    <script src="assets/admin/js/toastr.min.js"></script>
    

        
        <script>

        function notify(status,message) {
            toastr[status](message)
        }
    </script>

  <script src="assets/admin/js/nicEdit.js"></script>
    
    <script type="text/javascript">
    bkLib.onDomLoaded(function() {
        $( ".nicEdit" ).each(function( index ) {
            $(this).attr("id","nicEditor"+index);
            new nicEditor({fullPanel : true}).panelInstance('nicEditor'+index,{hasPanel : true});
        });
    });
  </script>
  
  <script>$('[data-toggle=tooltip]').tooltip();</script>
  <?php echo"$yes";?>
  </body>

<!-- Mirrored from <?php echo"$site_name3";?>.uk/admin by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Mar 2021 13:17:15 GMT -->
</html>