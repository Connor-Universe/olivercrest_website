
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
                    <h2 class="title">Investment Plan</h2>
                    <ul class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            Investment Plan
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

        <!-- ========Ticket-Section Starts Here ========-->
        <section class="ticket-section padding-bottom c-shape-wrapper padding-top">
            <div class="container">


                <div class="row">
                    <div class="col-12">
                        <div class="section-header">
                            <h2 class="title">Best Investment Plans</h2>
                            <p><?php echo"$site_name3";?> have these major investment packages; all packages mature in the specified days for each package.</p>
                        </div>
                    </div>
                </div>


                <div class="row justify-content-center mb-30-none mt-5">

                    
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
             data-resource='{&quot;id&quot;:4,&quot;name&quot;:&quot;starter Pack&quot;,&quot;minimum&quot;:&quot;300&quot;,&quot;maximum&quot;:&quot;1999&quot;,&quot;fixed_amount&quot;:&quot;0&quot;,&quot;interest&quot;:&quot;2.5&quot;,&quot;interest_status&quot;:1,&quot;times&quot;:&quot;24&quot;,&quot;status&quot;:1,&quot;featured&quot;:1,&quot;capital_back_status&quot;:1,&quot;lifetime_status&quot;:0,&quot;repeat_time&quot;:&quot;7&quot;,&quot;created_at&quot;:&quot;2020-08-27 08:30:47&quot;,&quot;updated_at&quot;:&quot;2020-09-15 05:23:44&quot;}'
             class='custom-button custom-button-color investButton'>Invest Now</a>
      </div>
  </div>
      ";
  }
  ?>

                                                            </div>
            </div>
        </section>
        <!-- ========Ticket-Section Ends Here ========-->
    
    <!-- ========Footer-Section Starts Here ========-->
<?php include "include/footer.php";?>
