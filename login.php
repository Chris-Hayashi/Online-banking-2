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

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <img class="navbar-brand" id="homeLink" src="./images/heroLogo1.png">
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
                    <h5 class="card-title">Login</h5>
                    <form id="loginForm" action="login.php" method="post">
                        <p>Username</p>
                        <input type="text" name="userName"/>
                        <p>Password</p>
                        <input type="password" name="password"/>
                        <br />
                        <br />
                        <button id="loginBtn" type="submit">Sign In</button>
                        <br><br>
                        <a href="register.html" id="registerBtn">Register</a>
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
// Initialize the session 
session_start(); 
  $logged_in = false;
  if (isset($_POST["userName"]) && isset($_POST["password"])) {
    if ($_POST["userName"] && $_POST["password"]) {
      $username = $_POST["userName"];
      $password = $_POST["password"];
      $_SESSION['userName'] = $_POST["userName"];
      $_SESSION['password'] = $_POST["password"];
      // create connection
      $conn = mysqli_connect("localhost", "root", "", "users");
      // check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      // log in user
      $sql = "SELECT password FROM student WHERE userName = '$username'";
      $results = mysqli_query($conn, $sql);
      if ($results) {
        $row = mysqli_fetch_assoc($results);
        if ($row["password"] === $password) {
          $logged_in = true;
          $sql = "SELECT * FROM student";
          $results = mysqli_query($conn, $sql);
          $_SESSION['login_user'] = $username;
          header("Location: welcome.php");
        } else {
          echo "Incorrect Password";
        }
         } else {
                echo mysqli_error($conn);
                 }
        mysqli_close($conn); // close connection
      } else {
         echo "Nothing was submitted. Try again!";
        }
           }
  ?>