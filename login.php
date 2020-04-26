<!-- <!DOCTYPE html> -->
<html lang="en" dir="ltr">

<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script crossorigin defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js"
        integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <!-- <link rel="stylesheet" href="/reset.css" /> -->
</head>

<body>
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
    </header>

  <div>
    <div class = "wrapper">
      <section class="login-banner">
            <div class="login-box">
              <h1 text-align="center">Login Here</h1>
              <form action="login.php" method="post">
                <p>UserName</p>
                <input type="text" name="userName" placeholder="Enter the UserName" value="">
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter the Password" value="">
                <input type="submit" name="login" value="Login">
                <a href="#">Forget Password</a>
                <a href="#">Privacy and Security</a>
                <input type="button" onclick="location.href='register.html';" value="Registration" />
            </div>

            <div class="information-area">
              <h3>Open a checking account with a bank focused on you</h3>
              <p>Our online banking lets you bank securely from almost anywhere</p>
              <a href="default.asp" target="_blank">Get Started</a>
            </div>
        </section>


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
        <a href="#"><img src = "facebook.png" alt = "favebook icon"></a>
        <a href="#"><img src = "youtube.png" alt = "youtube icon"></a>
        <a href="#"><img src = "twitter.png" alt = "twitter icon"></a>
      </div>
  </footer> -->

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

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid" style="text-align: center;">
        <div class="container">
          <!-- Login Form -->
            <div class="card p-3" id="loginContainer">
                <div class="card-body">
                    <h5 class="card-title">View Your Accounts</h5>
                    <form id="loginForm">
                        <p>Username</p>
                        <input type="text" />
                        <p>Password</p>
                        <input type="password" />
                        <br />
                        <br />
                        <button id="loginBtn" type="submit">Sign On</button>
                        <br><br>
                        <a href="/register.php" id="registerBtn">Register</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Grid (bottom) -->
    <div id="grid"  style="text-align: center;">
        <div class="container">
            <div class="row">
                <div class="col-md-4" id="firstCol">
                    <img src="images/withdraw.png" class="icon" />
                    <p class="iconText">Withdraw Cash</p>
                </div>
                <div class="col-md-4 ">
                    <img src="images/deposit.png" class="icon" />
                    <p class="iconText">Deposit Checks</p>
                </div>
                <div class="col-md-4" id="lastCol">
                    <img src="images/transfer.png" class="icon" />
                    <p class="iconText ">Transfer money</p>
                </div>

            </div>
        </div>
    </div>

</body>

</html>
<?php

  if (isset($_POST["userName"]) && isset($_POST["password"])){
    if($_POST["userName"] && $_POST["password"]){
      $conn = mysqli_connect("localhost", "root", "");
      mysqli_select_db($conn, "users");
      if (!$conn){
              die("connection failed: ".mysqli_connect_error());
            }

      $username = $_POST["userName"];
      $password = $_POST["password"];

      $sql = "select * from student where username = '$username' and password = '$password' ";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result);


      if($row['username'] == $username && $row['password'] == $password){
        // $msg = 'login Complete! thanks.';
        // echo "Login success".$row['username'];
        header("location: account.php");
        exit();
      } else{
        $message = "Username or Password is incorrect. \\nTry again.";
        echo "<script type = 'text/javascript'>alert('$message');</script>";


      }
    }
  }


 ?>