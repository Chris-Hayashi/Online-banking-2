
<html lang="en" dir="ltr">
  <head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
            <li><a href="deposit.html">deposit</a></li>
            <li><a href="transfer.html">transfer</a></li>
            <li><a href="atm.html">atm</a></li>
            </ul>
        </div>
      </nav>
    </header>

  <login>
    <div class = "wrapper">
      <section class="login-banner">
            <div class="login-box">
              <h1 align = "center">Login Here</h1>
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
      <!-- <section class="information-banner">
      </section> -->


    </div>


  </login>

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
        <c href="#"><img src = "facebook.png" alt = "favebook icon"></c>
        <c href="#"><img src = "youtube.png" alt = "youtube icon"></c>
        <c href="#"><img src = "twitter.png" alt = "twitter icon"></c>
      </div>
  </footer>
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
