<?php
 session_start();
 include("../../include/config.php");

 $get_user = "select * from users where token = '$_SESSION[token]'";
 $run_user = mysqli_query($connect,$get_user);
 $row_user = mysqli_fetch_array($run_user);

 $first_name = $row_user['first_name'];
 $last_name = $row_user['last_name'];
 $email = $row_user['email'];
 $wallet = $row_user['wallet'];
 $username = $row_user['username'];
 $country = $row_user['country'];
 $password = $row_user['password_user'];
 $id_no = $row_user['id_no'];
 $referal_code = $row_user['promo_code'];
 $get_total_invest = "SELECT SUM(amount) AS value_sum FROM investments WHERE id_no = $id_no";
  $run_total_invest = mysqli_query($connect,$get_total_invest);
  $total_invest = mysqli_fetch_assoc($run_total_invest);
  $get_bonus = "SELECT SUM(amount) AS value_bonus FROM bonus where id_no = $id_no";
$run_bonus = mysqli_query($connect,$get_bonus);
$fetch_bonus = mysqli_fetch_assoc($run_bonus);
$get_referal = "SELECT SUM(amount) AS value_referal FROM referals where id_no = $id_no";
$run_referal = mysqli_query($connect,$get_referal);
$fetch_referal = mysqli_fetch_assoc($run_referal);
$get_funds = "SELECT SUM(amount) AS value_adds FROM add_funds where id_no = $id_no";
$run_funds = mysqli_query($connect,$get_funds);
$fetch_funds = mysqli_fetch_assoc($run_funds);
$final = $fetch_funds['value_adds'] + $fetch_bonus['value_bonus'] + $fetch_referal['value_referal'] + $total_invest['value_sum'];
  $get_total_withdraw = "SELECT SUM(amount) AS value_sum FROM withdraw_request WHERE verified = 1 AND id_no =$id_no";
  $run_total_withdraw = mysqli_query($connect,$get_total_withdraw);
  $total_withdraw = mysqli_fetch_assoc($run_total_withdraw);
  $get_wallet = "select amount from wallet where id_no = $id_no";
  $run_wallet = mysqli_query($connect,$get_wallet);
  $row_wallet = mysqli_fetch_array($run_wallet);
  $amount = $row_wallet['amount'];

  if(!isset($total_invest['value_sum'])){
    $total_invest['value_sum'] = 0;
  }
  if(!isset($total_withdraw['value_sum'])){
    $total_withdraw['value_sum'] = 0;
  }
  if(!isset($amount)){
    $amount = 0;
  }

   $get_usersss = "select * from investment_request where id_no = $id_no ";
 $run_usersss = mysqli_query($connect,$get_usersss);
 $get_users = "select * from withdraw_request where id_no = $id_no ";
 $run_users = mysqli_query($connect,$get_users);
 $get_userss ="select * from users where id_no = $id_no";
 $run_userss  = mysqli_query($connect,$get_userss);
  $row_userss = mysqli_fetch_array($run_userss);
 $first_name = $row_userss['first_name'];
 $last_name = $row_userss['last_name'];
 $referal_code1 = $row_userss['promo_code'];

 $get_refer = "select * from users where referal_code = '$referal_code1'";
 $run_refer = mysqli_query($connect,$get_refer);
 ?>
<?php include "../include/top.php";?>
      <!-- End Navbar -->
      
    <div class="content">
        <div class="dash">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="first">
                        Buy Crypto Currency
                        </h3>
                        
                       
                    </div>

                </div>
                <!-- end of row -->
                <div class="row">
                
                <div class="col-lg-12">
                <h3> Countries </h3>
                  <h4>South Africa</h4>
                 <table class="table">
    <thead>
        <tr>
          
            <th>Website</th>
        
        </tr>
    </thead>
    <tbody>
    <tr>
      
        <td> <a href="https://luno.com">www.Luno.com</a></td>
        <td> <a href="https://altcointrader.co.za">www.altcointrader.co.za</a></td>
        <td> <a href="https://localbitcoin.com">www.localbitcoin.com</a></td>
        <td> <a href="https://coinmama.com">www.coinmama.com</a></td>
    </tr>
      
       
    </tbody>
</table>
<h4>Kenya</h4>
                 <table class="table">
    <thead>
        <tr>
          
            <th>Website</th>
        
        </tr>
    </thead>
    <tbody>
    <tr>
      
        <td> <a href="https://belfrics.io">www.belfrics.io</a></td>
        <td> <a href="https://altcointrader.co.za">www.altcointrader.co.za</a></td>
        <td> <a href="https://bitpesa.com">www.bitpesa.com</a></td>
        <td> <a href="https://coinmama.com">www.coinmama.com</a></td>
        <td> <a href="https://remitano.com">www.remitano.com</a></td>
    </tr>
      
       
    </tbody>
</table>
<h4>Nigeria</h4>
                 <table class="table">
    <thead>
        <tr>
          
            <th>Website</th>
        
        </tr>
    </thead>
    <tbody>
    <tr>
      
        <td> <a href="https://luno.com">www.Luno.com</a></td>
        <td> <a href="https://remitano.com">www.remitano.com</a></td>
        <td> <a href="https://localbitcoin.com">www.localbitcoin.com</a></td>
       
    </tr>
      
       
    </tbody>
</table>
<h4>Botswana</h4>
                 <table class="table">
    <thead>
        <tr>
          
            <th>Website</th>
        
        </tr>
    </thead>
    <tbody>
    <tr>
      
        <td> <a href="https://spectrocoin.com">www.spectrocoin.com</a></td>
        <td> <a href="https://flux.com">www.flux.com</a></td>
        <td> <a href="https://localbitcoin.com">www.localbitcoin.com</a></td>
        <td> <a href="https://coinmama.com">www.coinmama.com</a></td>
    </tr>
      
       
    </tbody>
</table>
<h4>Ghana</h4>
                 <table class="table">
    <thead>
        <tr>
          
            <th>Website</th>
        
        </tr>
    </thead>
    <tbody>
    <tr>
      
      
        <td> <a href="https://localbitcoin.com">www.localbitcoin.com</a></td>
        <td> <a href="https://coinmama.com">www.coinmama.com</a></td>
    </tr>
      
       
    </tbody>
</table>    <h4>Namibia</h4>
                 <table class="table">
    <thead>
        <tr>
          
            <th>Website</th>
        
        </tr>
    </thead>
    <tbody>
    <tr>
      
      
        <td> <a href="https://altcointrader.co.za">www.altcointrader.co.za</a></td>
      
        <td> <a href="https://coinmama.com">www.coinmama.com</a></td>
    </tr>
      
       
    </tbody>
</table>
<h4>Malawi</h4>
                 <table class="table">
    <thead>
        <tr>
          
            <th>Website</th>
        
        </tr>
    </thead>
    <tbody>
    <tr>
      
        <td> <a href="https://cex.io">www.cex.io</a></td>
      
        <td> <a href="https://coinmama.com">www.coinmama.com</a></td>
    </tr>
      
       
    </tbody>
</table>
<h4>Mozambique</h4>
                 <table class="table">
    <thead>
        <tr>
          
            <th>Website</th>
        
        </tr>
    </thead>
    <tbody>
    <tr>
      
    
        <td> <a href="https://coinmama.com">www.coinmama.com</a></td>
    </tr>
      
       
    </tbody>
</table>
<h4>Swaziland/Lesotho</h4>
                 <table class="table">
    <thead>
        <tr>
          
            <th>Website</th>
        
        </tr>
    </thead>
    <tbody>
    <tr>
      
     
        <td> <a href="https://altcointrader.co.za">www.altcointrader.co.za</a></td>
      
        <td> <a href="https://coinmama.com">www.coinmama.com</a></td>
    </tr>
      
       
    </tbody>
</table>
<h4>Zimbabwe</h4>
                 <table class="table">
    <thead>
        <tr>
          
            <th>Website</th>
        
        </tr>
    </thead>
    <tbody>
    <tr>
      
        <td> <a href="https://localbitcoin.com">www.localbitcoin.com</a></td>
        <td> <a href="https://golix.com">www.golix.com</a></td>
    </tr>
      
       
    </tbody>
</table>
<h4>Tanzania</h4>
                 <table class="table">
    <thead>
        <tr>
          
            <th>Website</th>
        
        </tr>
    </thead>
    <tbody>
    <tr>
      
        
        <td> <a href="https://altcointrader.co.za">www.altcointrader.co.za</a></td>
        <td> <a href="https://remitano.com">www.remitano.com</a></td>
        <td> <a href="https://coinmama.com">www.coinmama.com</a></td>
    </tr>
      
       
    </tbody>
</table>
<h4>United Kingdom</h4>
                 <table class="table">
    <thead>
        <tr>
          
            <th>Website</th>
        
        </tr>
    </thead>
    <tbody>
    <tr>
      
        <td> <a href="https://luno.com">www.Luno.com</a></td>
        <td> <a href="https://worldwidebitcoin.com">www.worldwidebitcoin.com</a></td>
        <td> <a href="https://localbitcoin.com">www.localbitcoin.com</a></td>
        <td> <a href="https://spectrocoin.com">www.spectrocoin.com</a></td>
    </tr>
      
       
    </tbody>
</table>
<h4>United States</h4>
                 <table class="table">
    <thead>
        <tr>
          
            <th>Website</th>
        
        </tr>
    </thead>
    <tbody>
    <tr>
      
        <td> <a href="https://luno.com">www.Luno.com</a></td>
        <td> <a href="https://coinbase.com">www.coinbase.com</a></td>

        <td> <a href="https://coinmama.com">www.coinmama.com</a></td>
    </tr>
      
       
    </tbody>
</table>
<h4>India</h4>
                 <table class="table">
    <thead>
        <tr>
          
            <th>Website</th>
        
        </tr>
    </thead>
    <tbody>
    <tr>
      
      
        <td> <a href="https://localbitcoin.com">www.localbitcoin.com</a></td>
        <td> <a href="https://coinbase.com">www.coinbase.com</a></td>
    </tr>
      
       
    </tbody>
</table>
<h4>Canada</h4>
                 <table class="table">
    <thead>
        <tr>
          
            <th>Website</th>
        
        </tr>
    </thead>
    <tbody>
    <tr>
      
        <td> <a href="https://shakepay.com">www.shakepay.com</a></td>
        
        <td> <a href="https://localbitcoin.com">www.localbitcoin.com</a></td>
        <td> <a href="https://coinbase.com">www.coinbase.com</a></td>
    </tr>
      
       
    </tbody>
</table>
<h4>Philippines</h4>
                 <table class="table">
    <thead>
        <tr>
          
            <th>Website</th>
        
        </tr>
    </thead>
    <tbody>
    <tr>
      
        <td> <a href="https://coins.ph">www.coins.ph</a></td>
     
    </tr>
      
       
    </tbody>
</table>
<h4>Malaysia</h4>
                 <table class="table">
    <thead>
        <tr>
          
            <th>Website</th>
        
        </tr>
    </thead>
    <tbody>
    <tr>
      
       
        <td> <a href="https://localbitcoin.com">www.localbitcoin.com</a></td>
        <td> <a href="https://blockchain.com">www.blockchain.com</a></td>
    </tr>
      
       
    </tbody>
</table>
                 </div>
                  
                  
                <!--end of row -->
            </div>
            <div class="container">
           <div class="row">
               <div class="col-lg-12">
               <div class="card card-nav-tabs text-center">
                            <div class="card-header card-header-primary">
                               <h3> Crypto Purchase Website List</h3>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title text-primary">Disclaimer</h4>
                                <p class="card-text">More Countries will be added soon</p>
                                <p class="card-text">Soon...Coutries listed above are mostly African as they find it difficult to purchase bitcoin</p>
                                <p class="card-text">OUR COMPANY HAS ALWAYS MADE SURE IT REMAINS THE LEADING INVESTMENT COMPANY IN THE WORLD</p>
                                
                            </div>
                          
                            </div>
               </div>
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
  <script>
  

  /* Get the text field */

  var copyText = document.getElementById("input");
document.getElementById('clipboardCopy').addEventListener('click', clipboardCopy);
async function clipboardCopy() {
  let text = document.querySelector("#input").value;
  await navigator.clipboard.writeText(text);
}




  </script>
</body>

</html>