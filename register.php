<!-- 
<html lang="en" dir="ltr">
  <head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <header>
    <nav>
      <div class="img-future">
        <div class="header-brand">
          <h1>Bank Of Future</h1>
        </div>
          <ul>
            <li><a href="login.php">home</a></li>
            </ul>
        </div>
      </nav>
    </header>
    <div>
      <div class = "register-body">
        <div class="register-box">
          <h1>Register for an Account</h1>
          <form class="" action="process.php" method="post">
                <p>Username</p>
                <input type="text" name="userName" placeholder="Enter Username" value="">
                <p>Password</p>
                <input type="text" name="password" placeholder="Enter Password" value="">
                <p>Email</p>
                <input type="text" name="email" placeholder="Enter Email" value="">
                <p>First Name and Last Name</p>
                <input type="text" name="name" placeholder="Enter First Name and Last Name" value="">
                <p>Address</p>
                <input type="text" name="address" placeholder="Enter Address" value="">
                <p class="inputHeader">Account Number</p>
                <input type="text" name="accountNumber" placeholder="Enter Account Number" value="">
                <p class="inputHeader">Pin Number</p>
                <input type="text" name="pin" placeholder="Enter Pin Number" value="">
                <p>Balance</p>
                <input type="text" name="balance" placeholder="Enter Initial Balance Amount" value="">

                <input type="submit" name="register" value="Register">
                <a href="#">Privacy and Security</a>
          </form>
        </div>
      </div>
</div>


  <footer>
    <ul class="footer-main">
      <li>Location</li>
      <li>Contact Us</li>
      <li>Privacy & Security</li>
      <li>Sitemap</li>
      <li>feedback</li>
    </ul>
    <ul class="footer-submain">
      <li><b></b>Bank of Future</li>
      <li><b></b>Best Banking in the United State</li>
      <li><b></b>Location in CMPE 131 Class</li>
      <li><b></b>Built by group #2</li>
      <li><b></b>2020, All Rights Reserved</li>
    </ul>
      <div class="footer-sm">
        <a href="#"><img src = "images/facebook.png" alt = "favebook icon"></a>
        <a href="#"><img src = "images/youtube.png" alt = "youtube icon"></a>
        <a href="#"><img src = "images/twitter.png" alt = "twitter icon"></a>
      </div>
  </footer>
  </body>
</html> -->

<html lang="en" dir="ltr">

<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
</head>

<body id="registerPage">
    <!-- <header>
      <nav>
        <div class="img-future">
          <div class="header-brand">
            <h1>Bank Of Future</h1>
          </div>
            <ul>
              <li><a href="login.php">home</a></li>
              <li><a href="deposit.html">deposit</a></li>
              <li><a href="transfer.html">transfer</a></li>
              <li><a href="atm.html">atm</a></li>
              </ul>
          </div>
        </nav>
      </header> -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img class="navbar-brand" id="homeLink" src="./images/heroLogo1.png">
        <!-- <a class="navbar-brand" id="homeLink" href="#">Online Banking</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <div class="nav-item">
            </div>
        </div>
    </nav>

    <!-- Register Form -->
    <div>


        <div class="container">
            <div class="card" id="registerCard">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="mt-2">Register</h1>

                        <p class="#">Register today for all your banking needs. Already have an account? <a
                                href="login.php">
                                <br />Log in here</a></p>
                    </div>
                    <div class="col-md-6">
                        <img src="./images/heroLogo2.png" id="registerLogo" alt="logo">
                    </div>


                </div>
                <div class="#" id="registerContainer">
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label>First Name<span class="required">*</span></label>
                                <input type="text" class="form-control" name="firstname"
                                    placeholder="Enter first name" />
                            </div>
                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label>Last Name<span class="required">*</span></label>
                                <input type="text" class="form-control" name="lastName" placeholder="Enter last name" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Street Address<span class="required">*</span></label>
                        <input type="text" class="form-control" name="state" placeholder="Enter street address" />
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>City<span class="required">*</span></label>
                                <input type="text" class="form-control" name="state" placeholder="Enter city" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>State<span class="required">*</span></label>

                                <select class="form-control" id="select-inputs">
                                    <option class="inputs" value="AL">AL</option>
                                    <option class="inputs" value="AK">AK</option>
                                    <option class="inputs" value="AR">AR</option>
                                    <option class="inputs" value="AZ">AZ</option>
                                    <option class="inputs" value="CA">CA</option>
                                    <option class="inputs" value="CO">CO</option>
                                    <option class="inputs" value="CT">CT</option>
                                    <option class="inputs" value="DC">DC</option>
                                    <option class="inputs" value="DE">DE</option>
                                    <option class="inputs" value="FL">FL</option>
                                    <option class="inputs" value="GA">GA</option>
                                    <option class="inputs" value="HI">HI</option>
                                    <option class="inputs" value="IA">IA</option>
                                    <option class="inputs" value="ID">ID</option>
                                    <option class="inputs" value="IL">IL</option>
                                    <option class="inputs" value="IN">IN</option>
                                    <option class="inputs" value="KS">KS</option>
                                    <option class="inputs" value="KY">KY</option>
                                    <option class="inputs" value="LA">LA</option>
                                    <option class="inputs" value="MA">MA</option>
                                    <option class="inputs" value="MD">MD</option>
                                    <option class="inputs" value="ME">ME</option>
                                    <option class="inputs" value="MI">MI</option>
                                    <option class="inputs" value="MN">MN</option>
                                    <option class="inputs" value="MO">MO</option>
                                    <option class="inputs" value="MS">MS</option>
                                    <option class="inputs" value="MT">MT</option>
                                    <option class="inputs" value="NC">NC</option>
                                    <option class="inputs" value="NE">NE</option>
                                    <option class="inputs" value="NH">NH</option>
                                    <option class="inputs" value="NJ">NJ</option>
                                    <option class="inputs" value="NM">NM</option>
                                    <option class="inputs" value="NV">NV</option>
                                    <option class="inputs" value="NY">NY</option>
                                    <option class="inputs" value="ND">ND</option>
                                    <option class="inputs" value="OH">OH</option>
                                    <option class="inputs" value="OK">OK</option>
                                    <option class="inputs" value="OR">OR</option>
                                    <option class="inputs" value="PA">PA</option>
                                    <option class="inputs" value="RI">RI</option>
                                    <option class="inputs" value="SC">SC</option>
                                    <option class="inputs" value="SD">SD</option>
                                    <option class="inputs" value="TN">TN</option>
                                    <option class="inputs" value="TX">TX</option>
                                    <option class="inputs" value="UT">UT</option>
                                    <option class="inputs" value="VT">VT</option>
                                    <option class="inputs" value="VA">VA</option>
                                    <option class="inputs" value="WA">WA</option>
                                    <option class="inputs" value="WI">WI</option>
                                    <option class="inputs" value="WV">WV</option>
                                    <option class="inputs" value="WY">WY</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Zip Code<span class="required">*</span></label>
                                <input type="number" class="form-control" name="zipCode" placeholder="Enter zip code" />
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <label>Date of Birth<span class="required">*</span></label>
                        <input type="date" class="form-control" name="dob" placeholder="Select Date of Bith" />
                    </div>
                    <div class="form-group">
                        <label>Email<span class="required">*</span></label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email" />
                    </div>
                    <div class="form-group">
                        <label>Username<span class="required">*</span></label>
                        <input type="text" class="form-control" name="username" placeholder="Enter username" />
                    </div>
                    <div class="form-group">
                        <label>Password<span class="required">*</span></label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password" />
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Randomly generated unique account number -->
                            <div class="form-group">
                                <label>Account Number<span class="required">*</span></label>
                                <input type="number" class="form-control" name="accountNum" placeholder="" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Add in limit of 4 -->
                            <div class="form-group">
                                <label>Pin Number<span class="required">*</span></label>
                                <input type="number" class="form-control" name="pinNum"
                                    placeholder="Enter 4 digit pin" />
                            </div>
                        </div>
                    </div>

                    <!-- Functionality to deposit money -->
                    <div class="form-group">
                        <label>Deposit Amount</label>
                        <input type="text" class="form-control" name="balance" placeholder="$ " />
                    </div>

                    <button type="submit" className="btn btn-lg btn-primary btn-block" id="register-btn">
                        Register!
                    </button>

                </div>
            </div>
        </div>
    </div>

    <!-- 
    <footer>
        <ul class="footer-main">
            <li>Location</li>
            <li>Contact Us</li>
            <li>Privacy & Security</li>
            <li>Sitemap</li>
            <li>feedback</li>
        </ul>
        <ul class="footer-submain">
            <li><b></b>Bank of Future</li>
            <li><b></b>Best Banking in the United State</li>
            <li><b></b>Location in CMPE 131 Class</li>
            <li><b></b>Built by group #2</li>
            <li><b></b>2020, All Rights Reserved</li>
        </ul>
        <div class="footer-sm">
            <a href="#"><img src="images/facebook.png" alt="favebook icon"></a>
            <a href="#"><img src="images/youtube.png" alt="youtube icon"></a>
            <a href="#"><img src="images/twitter.png" alt="twitter icon"></a>
        </div>
    </footer> -->
</body>
<script crossorigin defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js"
    integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous">
</script>

</html>