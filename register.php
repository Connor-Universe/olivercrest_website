<?php include "include/signup_process.php";
    $require = "";
    if(!isset($_GET['r'])){
        $referal= '';
        $dis = "";
      
    }else{
     $referal= $_GET['r'];
     $dis = "disabled";
       }
       if($force_settings ==1){
           $require = "required";
       }else{
           $require = "";
       }
?>

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
                    <h2 class="title">Sign Up</h2>
                    <ul class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            Sign Up
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
                    <img src="assets/templates/minimul/images/account/sign-up.png" alt="account">
                </div>
                <div class="account--content">
                    <h4 class="title">Sign Up your account</h4>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="account-form" id="recaptchaForm">
                    <?php echo"$success";?>
<?php echo"$fail";?>
                      
                              
                        <?php echo"$first_name_err";?>
                        <div class="form-group">
                            <label class="fixlabel" for="InputFirstname">
                                <i class="fas fa-user-circle"></i>
                            </label>
                            <input type="text" class="form-control" id="InputFirstname" name="first_name"
                                   placeholder="First Name"  required="">
                        </div>
                        <?php echo"$last_name_err";?>
                        <div class="form-group">
                            <label class="fixlabel" for="lastname">
                                <i class="fas fa-user-circle"></i>
                            </label>
                            <input type="text" class="form-control" id="lastname" name="last_name"
                                   placeholder="Last Name"  required="">
                        </div>

                        <?php echo"$username_err";?>
                        <div class="form-group">
                            <label class="fixlabel" for="email1">
                                <i class="fas fa-user-circle"></i>
                            </label>
                            <input type="text" id="exampleInputUsername" name="username" 
                                   class="form-control" placeholder="Username">
                        </div>
                        <?php echo"$email_err";?>
                        <div class="form-group">
                            <label class="fixlabel" for="email1">
                                <i class="fas fa-user-circle"></i>
                            </label>
                            <input type="email" class="form-control" id="email" name="email"
                                   placeholder="E-mail Address" value="" required="">
                        </div>

                    
                        <?php echo"$country_error";?>
                        <div class="form-group">
                        <select name="country"  class="form-control" placeholder="select country">
                       <option value="select" selected>- Select Country - </option>
                       <option value="Afghanistan">Afghanistan</option>
                            <option value="Åland Islands">Åland Islands</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antarctica">Antarctica</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories">French Southern Territories</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guernsey">Guernsey</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-bissau">Guinea-bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Isle of Man">Isle of Man</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jersey">Jersey</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                            <option value="Korea, Republic of">Korea, Republic of</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macao">Macao</option>
                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Pitcairn">Pitcairn</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russian Federation">Russian Federation</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Helena">Saint Helena</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor-leste">Timor-leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Viet Nam">Viet Nam</option>
                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                            <option value="Western Sahara">Western Sahara</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                       </select>
                        </div>
                        <?php echo"$btc_address_error";?>
                        <div class="form-group">
                            <label class="fixlabel" for="pass1">
                                <i class="fas fa-user-circle"></i>
                            </label>
                            <input type="text" name="wallet" class="form-control"
                                   placeholder="bitcoin wallet address">
                        </div>
                        <?php echo"$referal_code_err";?>
                        <div class="form-group">
                            <label class="fixlabel" for="pass1">
                                <i class="fas fa-user-circle"></i>
                            </label>
                            <input type="text"  name="code" class="form-control" value="<?php echo"$referal";?>" placeholder="Referal" <?php echo"$require";?> /> 
                        </div>
                        <?php echo"$password_err";?>

                        <div class="form-group">
                            <label class="fixlabel" for="pass1">
                                <i class="fas fa-unlock"></i>
                            </label>
                            <input type="password" name="password" value="" class="form-control"
                                   placeholder="Password">
                        </div>

                        <div class="form-group">
                            <label class="fixlabel" for="pass1">
                                <i class="fas fa-unlock"></i>
                            </label>
                            <input type="password" name="password2" class="form-control"
                                   placeholder="Retype Password">
                        </div>


                        <div class="form-group">
                            <input type="submit" id="recaptcha" class="submit-form-btn" value="SIGN UP">
                        </div>
                        <div class="form-group">
                            Already have an account yet?                            <a href="login.php" class=" d-block">Sign In</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ========Header-Section Ends Here ========-->


    <script src="code.jquery.com/jquery-3.4.1.min.js"></script>
    

    <!-- ========Footer-Section Starts Here ========-->
<?php include "include/footer.php";?>


 