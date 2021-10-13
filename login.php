<?php include "include/login_process.php";?>
    <?php include "include/nav.php";?>


    <!-- ========Feature-Section Starts Here ========-->
<section class="page-header">
    <div class="elepsis header-trop">
        <img src="assets/templates/minimul/images/profit/elepsis.html" alt="profit">
    </div>
    <div class="circle-2 header-trop" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
         data-paroller-type="foreground" data-paroller-direction="horizontal">
        <img src="assets/images/frontend/animation/05.png" alt="shape">
    </div>
    <div class="circle-3 header-trop" data-paroller-factor="0.10" data-paroller-factor-lg="-0.30"
         data-paroller-type="foreground" data-paroller-direction="horizontal">
        <img src="assets/images/frontend/animation/08.png" alt="shape">
    </div>
    <div class="star-4 header-trop">
        <img src="assets/images/frontend/animation/07.png" alt="shape">
    </div>
    <div class="star-4 two header-trop">
        <img src="assets/images/frontend/animation/07.png" alt="shape">
    </div>
    <div class="star-5 header-trop">
        <img src="assets/images/frontend/animation/07.png" alt="shape">
    </div>
    <div class="circle-1 two header-trop">
        <img src="assets/images/frontend/animation/10.png" alt="shape">
    </div>
    <div class="trop-4 header-trop">
        <img src="assets/images/frontend/animation/14.png" alt="animation">
    </div>
    <div class="trop-3 header-trop">
        <img src="assets/images/frontend/animation/13.png" alt="animation">
    </div>
    <div class="circle-1 three header-trop">
        <img src="assets/images/frontend/animation/12.png" alt="animation">
    </div>
    <div class="circle-2 header-trop" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
         data-paroller-type="foreground" data-paroller-direction="horizontal">
        <img src="assets/images/frontend/animation/05.png" alt="shape">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-content">
                    <h2 class="title">Sign In</h2>
                    <ul class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            Sign In
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="page-header-thumb wow slideInDown">
                    <img src="assets/images/frontend/breadcrumb/page-header-01.png" alt="page-header">
                    <div class="coin wow bounceInDown" data-wow-delay=".5s">
                        <img src="assets/images/frontend/breadcrumb/coin.png" alt="page-header">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========Feature-Section Eventes Here ========-->


    <div class="account--section sign-in-section active relative">
        <div class="container-fluid">
            <div class="account--area">
                <div class="account--thumb">
                    <img src="assets/templates/minimul/images/account/sign-in.png" alt="account">
                </div>
                <div class="account--content">
                    <h4 class="title">Sign in your account</h4>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST"  class="account-form" id="recaptchaForm">
                                            <?php echo"$fail";?>
                                            <?php echo"$email_err";?>
                        <div class="form-group">
                            <label class="fixlabel" for="email1">
                                <i class="fas fa-user-circle"></i>
                            </label>
                            <input type="text" id="exampleInputUsername"  name="email"  class="form-control" placeholder="Email Address" >
                        </div>
                        <?php echo"$password_err";?>

                        <div class="form-group">
                            <label class="fixlabel" for="pass1">
                                <i class="fas fa-unlock"></i>
                            </label>
                            <input type="password" name="password"  class="form-control" placeholder="Password">

                        </div>
                        <div class="form-group check-group">
                            <input id="check02" type="checkbox">
                            <label for="check02">
                                Remember Me                            </label>
                        </div>
                        <div class="form-group">
                            <input type="submit"  id="recaptcha"  class="submit-form-btn" value="SIGN IN">
                        </div>
                        <div class="form-group">
                            Don`t have on account yet?                            <a href="register.php" class="">Create an Account Now!</a>
                        </div>
                        <div class="form-group">
                            Forget Your Password?                              <a href="reset.php">Reset Password Now!</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ========Header-Section Ends Here ========-->


    <script src="code.jquery.com/jquery-3.4.1.min.js"></script>
    

    <!-- ========Footer-Section Starts Here ========-->
    <?php echo"$yes";?>
<?php include "include/footer.php";?>

