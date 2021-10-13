
    
    <?php include "include/nav.php";?>
    <?php
    $get_total_invest = "SELECT SUM(amount) AS value_sum FROM investments";
    $run_total_invest = mysqli_query($connect,$get_total_invest);
    $total_invest = mysqli_fetch_assoc($run_total_invest);
    $get_total_withdraw = "SELECT SUM(amount) AS value_sum FROM withdraws";
  $run_total_withdraw = mysqli_query($connect,$get_total_withdraw);
  $total_withdraw = mysqli_fetch_assoc($run_total_withdraw);
  $get_total_users = "SELECT * FROM users";
  $run_total_users = mysqli_query($connect,$get_total_users);
  $total_users = mysqli_num_rows($run_total_users) + 56500;
  $final1 = $total_invest['value_sum'] + 1212000;
  $final2 = $total_withdraw['value_sum'] + 1220000;
  
    ?>
    <?php include "include/profit.php";?>

            <!-- ========Banner-Section Starts Here ========-->
    <section class="banner-section">
        <div class="banner-shape02"></div>
        <div class="banner-shape03"></div>
        <div class="banner-shape01">
            <img src="assets/images/frontend/animation/banner-shape.png" alt="banner">
        </div>
        <div class="circle-2" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
             data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="assets/images/frontend/animation/05.png" alt="shape">
        </div>
        <div class="circle-2 three" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
             data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="assets/images/frontend/animation/11.png" alt="shape">
        </div>

        <div class="circle-2 five" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
             data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="assets/images/frontend/animation/15.png" alt="shape">
        </div>

        <div class="container">
            <div class="banner-area align-items-center">
                <div class="banner-content">
                    <h1 class="title">Revolutionary Investment Platform!</h1>
                    <p class="text-white">We are here to make your dream successful. You made the right choice to grow with us. Just Enjoy Your Best Rates While We Are Doing The Rest For You</p>
                    <a href="register.php" class="custom-button bg-1">SIGNUP NOW</a>
                </div>
                <div class="banner-thumb d-none d-md-block">
                    <div class="thumb">
                        <img src="assets/images/frontend/banner.png" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========Banner-Section Ends Here ========-->
    

                <!-- ========Client-Section Starts Here ========-->


<!-- ========Investment-Section Starts Here ========-->
<section class="investment-section padding  pos-rel">
    <div class="star-4">
        <img src="assets/images/frontend/animation/07.png" alt="shape">
    </div>
    <div class="star-4 three">
        <img src="assets/images/frontend/animation/07.png" alt="shape">
    </div>
    <div class="star-4 four">
        <img src="assets/images/frontend/animation/07.png" alt="shape">
    </div>
    <div class="star-4 five">
        <img src="assets/images/frontend/animation/07.png" alt="shape">
    </div>
    <div class="star-4 six">
        <img src="assets/images/frontend/animation/07.png" alt="shape">
    </div>
    <div class="star-4 seven">
        <img src="assets/images/frontend/animation/07.png" alt="shape">
    </div>
    <div class="star-4 eight">
        <img src="assets/images/frontend/animation/07.png" alt="shape">
    </div>



    <div class="container ">
        <div class="d-flex flex-wrap align-items-center">
            <div class="invest--area">
                <div class="row">
                    <div class="col-12 pr-lg-5">
                        <div class="section-header">
                            <h3 class="title">Our Statistics </h3>
                            <p class="ml-0">Look how far we have gotten ,Look how many lives we have touched .Join us now and take advantage of this great opportunity</p>
                        </div>
                    </div>
                                        <div class="col-12">
                        <div class="investment-area mb-4">

                                                                                    <div class="investment-item counter-item2 two  ">
                                <div class="investment-thumb">
                                   <i class="fas fa-wallet"></i>                                </div>
                                <div class="investment-content">
                                    <h4 class="odo-title">$</h4>
                                    <h4 class="odometer"
                                        data-odometer-final="<?php echo"$final1";?>"><?php echo"$final1";?></h4>
                                    <p>Total Deposited</p>
                                </div>
                            </div>
                                                                                        <div class="investment-item counter-item2   ">
                                <div class="investment-thumb">
                                   <i class="fas fa-university"></i>                                </div>
                                <div class="investment-content">
                                    <h4 class="odo-title">$</h4>
                                    <h4 class="odometer"
                                        data-odometer-final="<?php echo"$final2"?>"><?php echo"$final2";?></h4>
                                    <p>Total Withdraw</p>
                                </div>
                            </div>
                                                                                        <div class="investment-item counter-item2  one  ">
                                <div class="investment-thumb">
                                   <i class="fas fa-users"></i>                                </div>
                                <div class="investment-content">
                                    <h4 class="odo-title"></h4>
                                    <h4 class="odometer"
                                        data-odometer-final="<?php echo"$total_users";?>"><?php echo"$total_users";?></h4>
                                    <p>Total User</p>
                                </div>
                            </div>
                                                            
                        </div>
                    </div>
                                    </div>
            </div>

        </div>
    </div>
</section>
<!-- ========Investment-Section Ends Here ========-->

<!-- ========Client-Section Ends Here ========-->
            <section class="padding feature-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-header">
                        <h2 class="title">Reason To Choose Us</h2>
                        <p><?php echo"$site_name3";?> is a platform that is available to more than 98 countries worldwide. Here&#039;s why <?php echo"$site_name3";?> is unique</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-30-none">
                               <div class="col-md-6 col-sm-10 col-xl-4">
                    <div class="section-feature-item">
                        <div class="feature-thumb">
                            <i class="fas fa-lock"></i>                        </div>
                        <div class="feature-content">
                            <h5 class="title">Safe &amp; Secure</h5>
                            <p>
                                .
                            </p>
                        </div>
                    </div>
                </div>
                               <div class="col-md-6 col-sm-10 col-xl-4">
                    <div class="section-feature-item">
                        <div class="feature-thumb">
                            <i class="fas fa-wallet"></i>                        </div>
                        <div class="feature-content">
                            <h5 class="title">Easy Payment</h5>
                            <p>
                                .
                            </p>
                        </div>
                    </div>
                </div>
                               <div class="col-md-6 col-sm-10 col-xl-4">
                    <div class="section-feature-item">
                        <div class="feature-thumb">
                            <i class="fas fa-money-check-alt"></i>                        </div>
                        <div class="feature-content">
                            <h5 class="title">Daily Cash Outs</h5>
                            <p>
                                .
                            </p>
                        </div>
                    </div>
                </div>
                               <div class="col-md-6 col-sm-10 col-xl-4">
                    <div class="section-feature-item">
                        <div class="feature-thumb">
                            <i class="fas fa-heart"></i>                        </div>
                        <div class="feature-content">
                            <h5 class="title">USER FRIENDLY</h5>
                            <p>
                                .
                            </p>
                        </div>
                    </div>
                </div>
                               <div class="col-md-6 col-sm-10 col-xl-4">
                    <div class="section-feature-item">
                        <div class="feature-thumb">
                            <i class="fas fa-align-right"></i>                        </div>
                        <div class="feature-content">
                            <h5 class="title">NO HIDDEN FEE</h5>
                            <p>
                                .
                            </p>
                        </div>
                    </div>
                </div>
                               <div class="col-md-6 col-sm-10 col-xl-4">
                    <div class="section-feature-item">
                        <div class="feature-thumb">
                            <i class="fas fa-headset"></i>                        </div>
                        <div class="feature-content">
                            <h5 class="title">24hr Support</h5>
                            <p>
                                .
                            </p>
                        </div>
                    </div>
                </div>
                           </div>
        </div>
    </section>


            <!-- ========Feature-Section Starts Here ========-->
    <section class="get-profit-section padding pos-rel darkmode">
        <div class="circle-2" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
             data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="assets/images/frontend/animation/05.png" alt="shape">
        </div>
        <div class="left-shape01 right">
            <img src="assets/images/frontend/animation/right-shape-1.png" alt="shape"
                 class="wow slideInRight">
        </div>
        <div class="circle-2 four" data-paroller-factor="-0.1" data-paroller-factor-lg="0.30"
             data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="assets/images/frontend/animation/11.png" alt="shape">
        </div>
        <div class="circle-1 three">
            <img src="assets/images/frontend/animation/12.png" alt="animation">
        </div>
        <div class="trop-3">
            <img src="assets/images/frontend/animation/13.png" alt="animation">
        </div>
        <div class="trop-4">
            <img src="assets/images/frontend/animation/14.png" alt="animation">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-header">
                        <h2 class="title">How To Earn With Us</h2>
                        <p>Quick steps to attain financial freedom.</p>
                    </div>
                </div>
            </div>
            <div class="get-profit">
                                <div class="item">
                <div class="item-thumb">
                    <i class="fas fa-id-card"></i>                </div>
                <h5 class="subtitle">Create Account</h5>
                </div>
                                <div class="item">
                <div class="item-thumb">
                    <i class="fas fa-align-justify"></i>                </div>
                <h5 class="subtitle">Choose Plan</h5>
                </div>
                                <div class="item">
                <div class="item-thumb">
                    <i class="fab fa-autoprefixer"></i>                </div>
                <h5 class="subtitle">Invest Now</h5>
                </div>
                                <div class="item">
                <div class="item-thumb">
                    <i class="fas fa-wallet"></i>                </div>
                <h5 class="subtitle">Get Profit</h5>
                </div>
                                <div class="thumb d-none d-lg-block">
                    <img src="assets/images/frontend/profit/5f45a909c03421598400777.html"
                         alt="profit">
                </div>
            </div>
        </div>
    </section>
    <!-- ========Feature-Section Ends Here ========-->
            <!-- ========Ticket-Section Starts Here ========--->
    <section class="ticket-section  c-shape-wrapper padding">
        <div class="c-shape01" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
             data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="assets/images/frontend/animation/circle01.png" alt="shapes">
        </div>
        <div class="container">
            

            <div class="row justify-content-center mb-30-none">
                
                    <?php
  $get_plan = "select * from plans";
  $run_plan = mysqli_query($connect,$get_plan);
  while($row_plan = mysqli_fetch_array($run_plan)){
      $name = $row_plan['name'];
      $lower = $row_plan['lower_amount'];
      $upper = $row_plan['upper_amount'];
      $percentage = $row_plan['percentage'];
      $day = $row_plan['day'];
      echo"
      <div class='col-md-6 col-lg-4'>
      <div class='ticket-item bg-1'>
          <h3 class='title'>$name</h3>
          <img src='assets/images/plan-icon1.png' width='120'>
          <br>
          
          <h6 class='sub-title'>Daily profit: $percentage                                 % </h6>
          <ul>
             <!-- <li>Daily
                     </li>--->
              
                  <li><span class='badge badge-success'>Capital Will Return Back</span></li>
                                                      <li>Referal bonus: 5%</li>
             <!--- <li>24/7Support</li>-->


                                                  <li class='plan_min'> Min. $$lower
                      <span>Max: $$upper</span></li>

                                          <li>   
                                                     withdrawal After $day days                                    
                  
                                                                                 </li>
          </ul>
          <a href='register.php' 
         
             class='custom-button custom-button-color investButton'>Invest Now</a>
      </div>
  </div>
      ";
  }
  ?>
                        <!-- end -->

                                                                        
                                                </div>
        </div>
    </section>
    <!-- ========Ticket-Section Ends Here ========-->


            <!-- ========Profit-Section Stars Here ========-->
    <section class="profit-calc padding-top padding-bottom light-color bg_img"
             data-background="assets/images/frontend/profit_cal.png">
        <div class="shape"></div>
        <div class="circle-2" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
             data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="assets/images/frontend/animation/08.png" alt="shape">
        </div>
        <div class="circle-2 five" data-paroller-factor="-0.10" data-paroller-factor-lg="0.30"
             data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="assets/images/frontend/animation/05.png" alt="shape">
        </div>
        <div class="elepsis">
            <img src="assets/images/frontend/footer/elepsis.png" alt="profit">
        </div>
        <div class="man-coin">
            <img src="assets/images/frontend/footer/man-coin.png" alt="profit">
        </div>
        <div class="coin-only">
            <img src="assets/images/frontend/footer/profit-coin.png" alt="profit">
        </div>
        <div class="man-only">
            <img src="assets/images/frontend/footer/profit-man.png" alt="profit">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header"id="profit">
                        <h2 class="title">Calculate Your Profit</h2>
                        <p>Find out how much you could earn with the little you have today.</p>
                    </div>
                    <?php echo"$error";?>
                </div>
            </div>
            <form class="profit-form row justify-content-center" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
                <div class="form-group col-sm-6 col-md-4 col-lg-3">
                    <h6 class="profil-title">Plan</h6>
                    <select class="select-bar" id="changePlan" name = "plan">
                        <option value="select">Choose Plan</option>
                            <?php
                            $get_plan1 = "select * from plans";
                            $run_plan1 = mysqli_query($connect,$get_plan1);
                            while($row_plan1 = mysqli_fetch_array($run_plan1)){
                                $name1 = $row_plan1['name'];
                                $lower1 = $row_plan1['lower_amount'];
                                $upper1 = $row_plan1['upper_amount'];
                                $percentage1 = $row_plan1['percentage'];
                                $day1 = $row_plan1['day'];
                            
                                echo"<option value ='$name1'>$name1($$lower1 - $$upper1)</option>";

                            }
                            $column2 = array();
                            $get_lowest = "select lower_amount from plans";
                            $run_lowest = mysqli_query($connect,$get_lowest);
                            while($column_lowest = mysqli_fetch_array($run_lowest)){
                              $column2[] = $column_lowest[0];
                            }
                            $lowest = min($column2);
                            $column3 = array();
                            $get_higest = "select upper_amount from plans";
                            $run_higest = mysqli_query($connect,$get_higest);
                            while($column_higest = mysqli_fetch_array($run_higest)){
                              $column3[] = $column_higest[0];
                            }
                            $higest = max($column3);


                            ?>
                                            </select>
                </div>
                <div class="form-group col-sm-6 col-md-4 col-lg-3">
                    <h6 class="profil-title">Invest Amount</h6>
                    <input type="number" placeholder="$0.00" max="<?php echo"$higest";?>" min="<?php echo"$lowest";?>" class="invest-input"
                          name = "invest">
                </div>
                <div class="form-group col-sm-6 col-md-4 col-lg-3">
                    <h6 class="profil-title">Calculate </h6>
                    <button type="submit" class="btn btn-primary" name="check"> Calculate </button>
                    <code class="period"></code>
                </div>
                <div class="form-group col-sm-6 col-md-4 col-lg-3">
                    <h6 class="profil-title">Profit</h6>
                    <input type="text" placeholder="0.00" value="$<?php echo"$profit";?>" class="profit-input" name = "profit" readonly>
                    <code class="period"></code>
                </div>
              
            </form>
        </div>
    </section>
    <!-- ========Profit-Section Ends Here ========-->





            <!-- ========Transaction-Section Starts Here ========-->


<section class="transaction-section bg-shape-1 padding">
    <div class="left-shape01">
        <img src="assets/images/frontend/animation/left-shape-1.png" alt="shape"
             class="wow slideInLeft">
    </div>
    <div class="trop-2">
        <img src="assets/images/frontend/animation/09.png" alt="shape">
    </div>
    <div class="circle-2" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
         data-paroller-type="foreground" data-paroller-direction="horizontal">
        <img src="assets/images/frontend/animation/05.png" alt="shape">
    </div>
    <div class="circle-3" data-paroller-factor="0.10" data-paroller-factor-lg="-0.30"
         data-paroller-type="foreground" data-paroller-direction="horizontal">
        <img src="assets/images/frontend/animation/08.png" alt="shape">
    </div>
    <div class="star-4">
        <img src="assets/images/frontend/animation/07.png" alt="shape">
    </div>
    <div class="star-4 two">
        <img src="assets/images/frontend/animation/07.png" alt="shape">
    </div>
    <div class="star-5">
        <img src="assets/images/frontend/animation/07.png" alt="shape">
    </div>
    <div class="circle-1 two">
        <img src="assets/images/frontend/animation/10.png" alt="shape">
    </div>
    <div class="circle-2 two" data-paroller-factor="-0.10" data-paroller-factor-lg="0.20"
         data-paroller-type="foreground" data-paroller-direction="horizontal">
        <img src="assets/images/frontend/animation/08.png" alt="shape">
    </div>
    <div class="circle-2 three" data-paroller-factor="-0.1" data-paroller-factor-lg="0.30"
         data-paroller-type="foreground" data-paroller-direction="horizontal">
        <img src="assets/images/frontend/animation/11.png" alt="shape">
    </div>
    <div class="right-circle d-none d-lg-block"></div>
    <div class="shadow1 wow slideInUp" data-wow-duration="1s">
        <img src="assets/images/frontend/animation/shadow1.png" alt="animation">
    </div>
    <div class="shadow2 wow slideInUp" data-wow-duration="1s" data-wow-delay=".5s">
        <img src="assets/images/frontend/animation/shadow1.png" alt="animation">
    </div>
    <div class="coin1 wow bounceInDown" data-wow-duration="1s" data-wow-delay="1.5s">
        <img src="assets/images/frontend/animation/coin1.png" alt="animation">
    </div>
    <div class="coin2 wow bounceInDown" data-wow-duration="1s" data-wow-delay="2s">
        <img src="assets/images/frontend/animation/coin2.png" alt="animation">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header">
                    <h2 class="title">Our Latest Transaction</h2>
                    <p>,</p>
                </div>
            </div>
        </div>
        <div class="tab deposit-tab">
            <ul class="tab-menu text-center">
                <li class="active custom-button">
                    Latest deposit                </li>
                <li class="custom-button">
                    Latest Withdraw                </li>
            </ul>
            <div class="tab-area">
                <div class="tab-item active">
                    <div class="deposite-table">
                        <table>
                            <thead>
                            <tr class="bg-2">
                                <th scope="col">Name</th>
                                <th scope ="col"> Country</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Currency</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                $get_deposit = "select * from investment_request where verified = 1 order by id DESC limit 0,5  ";
                                $run_deposit = mysqli_query($connect,$get_deposit);
                                while($row_deposit = mysqli_fetch_array($run_deposit)){
                                  $firstname1 = $row_deposit['first_name'];
                            
                                    $country1 = $row_deposit['country'];

                                    $amount1 = $row_deposit['amount_invest'];

                              
                                    $currency1 = $row_deposit['coin'];
                                    echo"
                                    <tr>
                                    <td>
                                        <div class='author'>
                                            <div class='thumb'>
                                                <a href='javascript:void(0)'>
                                                    
                                                </a>
                                            </div>
                                            <div class='content'>
                                                <a href='javascript:void(0)'>$firstname1 </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$country1</td>
                                    <td>$ $amount1</td>
                                    <td>$currency1</td>
                        
                                </tr>
                                    ";
                                }
                                ?>
                                                            
                                
                                                          
                                                        </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-item">
                    <div class="deposite-table">
                        <table>
                            <thead>
                            <tr class="bg-2">
                                <th scope="col">Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Currency</th>
                             
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                $get_deposit = "select * from withdraw_request where verified = 1 order by id DESC limit 0,5  ";
                                $run_deposit = mysqli_query($connect,$get_deposit);
                                while($row_deposit = mysqli_fetch_array($run_deposit)){
                                    $firstname2 = $row_deposit['first_name'];
                            
                                    $country2 = $row_deposit['country'];

                                    $amount2 = $row_deposit['amount'];
                                    $currency2 = $row_deposit['coin'];
                                    echo"
                                    <tr>
                                    <td>
                                        <div class='author'>
                                            <div class='thumb'>
                                                <a href='javascript:void(0)'>
                                                    
                                                </a>
                                            </div>
                                            <div class='content'>
                                            <a href='javascript:void(0)'>$firstname2 </a>
                                        </div>
                                    </div>
                                </td>
                                <td>$country2</td>
                                <td>$ $amount2</td>
                                <td>$currency2</td>
                    
                        
                                </tr>
                                    ";
                                }
                                ?>
                                                                                                                       </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========Transaction-Section Ends Here ========-->
            <!-- ========Call-In-Action-Section Starts Here ========-->
<section class="call-in-action bg-6 padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="call-wrapper">
                    <div class="call-area">
                        <h3 class="title">Join  Us Now</h3>
                        <p>Don&#039;t wait no more join the moving train and take the trophy of financial freedom</p>
                        <a href="register.php" class="custom-button bg-3">SIGN UP</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========Call-In-Action-Section Ends Here ========-->
            <!-- ========Faq-Section Starte Here ========-->
    <section class="faq-section padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-header">
                        <h2 class="title">Frequently Asked Questions</h2>
                        <p>Frequently asked questions (FAQ) or Questions and Answers (Q&amp;A), are listed questions and answers, all supposed to be commonly asked in some context</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center justify-content-lg-between">

                <div class="col-lg-12 col-xl-12">
                    <div class="faq-wrapper style-two">


                                                    <div class="faq-item   open active ">
                                <h6 class="faq-title">How Long will it take me to withdraw my earning?</h6>
                                <div class="faq-content">
                                    <p>In <?php echo"$site_name3";?> withdrawal interval is after The specified number of days of your investment. You will always have continuous withdrawal as long as you have active investment in the system.<br></p>
                                </div>
                            </div>

                                                    <div class="faq-item ">
                                <h6 class="faq-title">How Do I Make Deposit To My Account After Signup?</h6>
                                <div class="faq-content">
                                    <p>&nbsp;In order to credit your account, login to your dashboard nagivate to &gt;&gt;invest from the menu and select suitable plan of your choice. Enter the amount you want to invest and click Invest.<br></p>
                                </div>
                            </div>

                                                    <div class="faq-item ">
                                <h6 class="faq-title">How Do I Get started?</h6>
                                <div class="faq-content">
                                    <p>To get started with <?php echo"$site_name3";?>, you will navigate to Signup fill in your details. &gt;&gt;&gt; verify your email address and login to your dashbaord.<br></p>
                                </div>
                            </div>

                                                    <div class="faq-item ">
                                <h6 class="faq-title">What is <?php echo"$site_name3";?>?</h6>
                                <div class="faq-content">
                                    <p><div><?php echo"$site_name3";?> is an investment company located in , <?php echo"$location";?>. Incorporated in the year 2016.</div><div><br></div><div>We indulge ourselves with Real Estate Investment, Crypto Currency Investment, Forex Trading.</div><div><?php echo"$site_name3";?> allows investors to participate and benefit from the company using four different cryptocurrencies as a means of payment.</div><div><br></div><div></div></p>
                                </div>
                            </div>

                        

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========Faq-Section Ends Here ========-->


            <section class="team-section padding">
    <div class="container">
        <div class="section-header">
            <h2 class="title">Our Expert Team</h2>
            <p>we are proud of our great team.They are the most motivated and enthusiastic people we have, and always ready and willing to help out where needed.</p>
        </div>
        <div class="row justify-content-center mb-30-none">

                        <div class="col-sm-10 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                <div class="team-item">
                    <div class="team-thumb">
                        <a href="javascript:void(0)">
                            <img src="assets/images/frontend/team/5f5ffdfaa32981600126458.jpg" alt="team">
                        </a>
                    </div>
                    <div class="team-content">
                        <h4 class="title mt-0">
                            <a href="javascript:void(0)">Gregory peters</a>
                        </h4>
                        <span>CEO</span>
                        <ul class="social-icons-team d-flex flex-wrap justify-content-center">
                            <li>
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
                        <div class="col-sm-10 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                <div class="team-item">
                    <div class="team-thumb">
                        <a href="javascript:void(0)">
                            <img src="assets/images/frontend/team/5f5ff9bc8aac71600125372.png" alt="team">
                        </a>
                    </div>
                    <div class="team-content">
                        <h4 class="title mt-0">
                            <a href="javascript:void(0)">Sarah johns</a>
                        </h4>
                        <span>Marketing dept</span>
                        <ul class="social-icons-team d-flex flex-wrap justify-content-center">
                            <li>
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
                        <div class="col-sm-10 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                <div class="team-item">
                    <div class="team-thumb">
                        <a href="javascript:void(0)">
                            <img src="assets/images/frontend/team/5f5ffe52871d31600126546.jpg" alt="team">
                        </a>
                    </div>
                    <div class="team-content">
                        <h4 class="title mt-0">
                            <a href="javascript:void(0)">Ronnie Jonathan</a>
                        </h4>
                        <span>Project manager</span>
                        <ul class="social-icons-team d-flex flex-wrap justify-content-center">
                            <li>
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
</section>
            <!-- ========Client-Section Starts Here ========-->
               <!-- ========Faq-Section Ends Here ========-->


               <section class="team-section padding">
    <div class="container">
        <div class="section-header">
            <h2 class="title">Our Certificate of Incorporation</h2>
            <p>Click Below To view our certificate</p>
        </div>
        <div class="row justify-content-center mb-30-none">

                   
                    
                        <div class="col-sm-10 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                <div class="team-item">
                    <div class="team-thumb">
                        <a href="images/certificate.pdf">
                            <img src="images/certificate.jpg" alt="team">
                        </a>
                    </div>
                    <div class="team-content">
                        <h4 class="title mt-0">
                            <a href="javascript:void(0)">International Business Coporation</a>
                        </h4>
             
                      
                    </div>
                </div>
            </div>
            

        </div>
    </div>
</section>
            <!-- ========Client-Section Starts Here ========-->
<section class="client-section padding">
    <div class="container mw-lg-100">
        <div class="client-area">
            <div class="owl-thumbs" data-slider-id="1">

                                    <div class="owl-thumb-item">
                        <div class="thumb wow zoomIn" data-wow-duration="1s" >
                            <img src="assets/images/ii.jpg" alt="client">
                        </div>
                    </div>
                                    <div class="owl-thumb-item">
                        <div class="thumb wow zoomIn" data-wow-duration="1s" >
                            <img src="assets/images/i.jpg" alt="client">
                        </div>
                    </div>
                                    <div class="owl-thumb-item">
                        <div class="thumb wow zoomIn" data-wow-duration="1s" >
                            <img src="assets/images/iii.jpg" alt="client">
                        </div>
                    </div>
                                    <div class="owl-thumb-item">
                        <div class="thumb wow zoomIn" data-wow-duration="1s" >
                            <img src="assets/images/iv.jpg" alt="client">
                        </div>
                    </div>
                                    <div class="owl-thumb-item">
                        <div class="thumb wow zoomIn" data-wow-duration="1s" >
                            <img src="assets/images/v.jpg" alt="client">
                        </div>
                    </div>
                

            </div>
            <div class="client-slider-section">
                <h2 class="title">What People Say</h2>
                <div class="client-slider owl-carousel owl-theme" data-slider-id="1">

                                            <div class="client-slide-item">
                            <blockquote>
                                i must compliment this platform ,thanks to the team for their good works
                            </blockquote>
                            <div class="author">
                                <div class="author-thumb">
                                    <img src="assets/images/ii.jpg" alt="client">
                                </div>
                                <div class="author-content">
                                    <h6 class="sub-title"><a href="javascript:void(0)">Janet wilson</a></h6>
                                    <span>investor</span>
                                </div>
                            </div>
                        </div>
                                            <div class="client-slide-item">
                            <blockquote>
                                this is great, you guys should keep it up. the good works
                            </blockquote>
                            <div class="author">
                                <div class="author-thumb">
                                    <img src="assets/images/i.jpg" alt="client">
                                </div>
                                <div class="author-content">
                                    <h6 class="sub-title"><a href="javascript:void(0)">peter james</a></h6>
                                    <span>accountant</span>
                                </div>
                            </div>
                        </div>
                                            <div class="client-slide-item">
                            <blockquote>
                                i really feel lucky to be here
                            </blockquote>
                            <div class="author">
                                <div class="author-thumb">
                                    <img src="assets/images/iii.jpg" alt="client">
                                </div>
                                <div class="author-content">
                                    <h6 class="sub-title"><a href="javascript:void(0)">christopher ethan</a></h6>
                                    <span>business</span>
                                </div>
                            </div>
                        </div>
                                            <div class="client-slide-item">
                            <blockquote>
                                I was a lil bit afraid but it was worth it in the end
                            </blockquote>
                            <div class="author">
                                <div class="author-thumb">
                                    <img src="assets/images/iv.jpg" alt="client">
                                </div>
                                <div class="author-content">
                                    <h6 class="sub-title"><a href="javascript:void(0)">micheal coleman</a></h6>
                                    <span>Farmer</span>
                                </div>
                            </div>
                        </div>
                                            <div class="client-slide-item">
                            <blockquote>
                                I love <?php echo"$site_name3";?>💚💚💚💚💚💚
                            </blockquote>
                            <div class="author">
                                <div class="author-thumb">
                                    <img src="assets/images/v.jpg" alt="client">
                                </div>
                                <div class="author-content">
                                    <h6 class="sub-title"><a href="javascript:void(0)">Ming Tao</a></h6>
                                    <span>Bitcoin enthusiast</span>
                                </div>
                            </div>
                        </div>
                    

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========Client-Section Ends Here ========-->
            <!-- ========Newslater-Section Starts Here ========-->
<section id="subscribe" class="newslater-section padding overlay-1 bg_img pos-rel" data-paroller-factor="0.10"
         data-paroller-factor-lg="-0.30"
         data-paroller-type="background" data-paroller-direction="vertical">

    <div class="star-1">
        <img src="assets/images/frontend/animation/01.png" alt="shape">
    </div>

    <div class="circle-1">
        <img src="assets/images/frontend/animation/02.png" alt="shape">
    </div>

    <div class="trop-1">
        <img src="assets/images/frontend/animation/03.png" alt="shape">
    </div>

    <div class="star-2">
        <img src="assets/images/frontend/animation/04.png" alt="shape">
    </div>

    <div class="circle-2" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
         data-paroller-type="foreground" data-paroller-direction="horizontal">
        <img src="assets/images/frontend/animation/05.png" alt="shape">
    </div>

    <div class="star-3">
        <img src="assets/images/frontend/animation/06.png" alt="shape">
    </div>

    <div class="container">
        <div class="newslater-wrapper ">
            <div class="row">
                <div class="col-12">
                    <div class="section-header">
                        <h2 class="title">Subscribe Now</h2>
                        <p>Subscribe to our newsletter and get notified on our latest bonuses and offers</p>
                    </div>
                </div>
            </div>
            <form class="subscribe-form pb-70" action="" method="post" name ="sub">
                          <div class="form-group">
                    <input type="email" name="email" placeholder="Email Address">
                    <button type="submit">
                        <i class="flaticon-send"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- ========Newslater-Section Ends Here ========-->
            <!-- ========Sponsor-Section Starte Here ========-->

<div class="sponsor-section padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header">
                    <h2 class="title">Our Payment Methods</h2>
                    <p>Safe Payment Safe Transaction</p>
                </div>
            </div>
        </div>
        <div class="sponsors">
            <div class="owl-carousel owl-theme sponsor-slider">


                                <div class="sponsor-thumb">
                    <a href="javascript:void(0)">
                        <img src="assets/images/gateway/5f6003304f52d1600127792.png" alt="Blockchain">
                    </a>
                </div>
                                <div class="sponsor-thumb">
                    <a href="javascript:void(0)">
                        <img src="assets/images/gateway/5f5fff1d5a0031600126749.png" alt="Coingate">
                    </a>
                </div>
                                <div class="sponsor-thumb">
                    <a href="javascript:void(0)">
                        <img src="assets/images/gateway/5f5fff3b787141600126779.png" alt="Coinbase Commerce">
                    </a>
                </div>
                  
                
            </div>
            <div class="owl-prev">
                <i class="fas fa-angle-left"></i>
            </div>
            <div class="owl-next">
                <i class="fas fa-angle-right"></i>
            </div>
        </div>
    </div>
</div>
<!-- ========Sponsor-Section Ends Here ========-->

        


    <!-- ========Footer-Section Starts Here ========-->
<?php include "include/footer.php";?>

