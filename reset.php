<?php include "include/reset_process.php";?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from <?php echo"$site_name3";?>.uk/admin/password/reset by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Mar 2021 13:17:16 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo"$site_name3";?> - Account Recovery</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logoIcon/favicon.png"/>
      <link rel="stylesheet" href="assets/admin/css/signin.css">
  
  <link rel="stylesheet" href="assets/admin/css/dashboard.min.css">
  <link rel="stylesheet" href="assets/admin/css/custom.css">

 
  </head>
<body>
      <div class="signin-section pt-5" style="background-image: url('assets/images/login.html');">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
            <div class="col-xl-4 col-md-6 col-sm-8">
                <div class="login-area">
                    <div class="login-header-wrapper text-center">
                        <img class="logo" src="assets/images/logo2.png" alt="image">
                        <p class="text-center admin-brand-text">Recover Account</p>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="login-form">
                      <?php echo"$email_err";?>            
                      <?php echo"$success";?> <div class="login-inner-block">
                            <div class="frm-grp">
                                <label>Email</label>
                                <input type="email" name="email" placeholder="Enter your email address">
                            </div>
                        </div>

                     
                        <div class="btn-area text-center">
                            <button type="submit" class="submit-btn">Send Reset Email</button>
                        </div>
                        <div class="d-flex mt-5 justify-content-center">
                            <a href="login.php" class="forget-pass">Login Here</a>
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
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
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
  </body>

<!-- Mirrored from <?php echo"$site_name3";?>.uk/admin/password/reset by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Mar 2021 13:17:17 GMT -->
</html>