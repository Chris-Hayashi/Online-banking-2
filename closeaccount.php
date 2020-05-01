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

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="welcome.php">
            <img class="navbar-brand" id="homeLink" src="./images/heroLogo1.png">
            </a>
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
                        <h1 class="mt-2">Delete Account</h1>

                        <p class="#">This procedure is permanent. Are you sure you wish to proceed?</p>
                    </div>
                    <div class="col-md-6">
                        <img src="./images/heroLogo2.png" id="registerLogo" alt="logo">
                    </div>


                </div>
                <form id="deleteForm" action="closeaccount.php" method="post">
                <div class="#" id="deleteContainer">
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <div class="form-group" >
                                
                                <label>First Name<span class="required">*</span></label>
                                <input type="text" class="form-control" name="firstName"
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
                        <label>Username<span class="required">*</span></label>
                        <input type="text" class="form-control" name="userName" placeholder="Enter username" />
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
                                <input type="number" class="form-control" name="accountNumber" placeholder="" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Add in limit of 4 -->
                            <div class="form-group">
                                <label>Pin Number<span class="required">*</span></label>
                                <input type="number" class="form-control" name="pin"
                                    placeholder="Enter 4 digit pin" />
                            </div>
                        </div>
                    </div>

                    <button type="submit" className="btn btn-lg btn-primary btn-block" id="register-btn">
                        Confirm
                    </button>
                </form>
                </div>
                </form>
            </div>
        </div>
    </div>

</body>
<script crossorigin defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js"
    integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous">
    </script>

</html>
<?php
if (isset($_POST["userName"]) && isset($_POST["password"])) {
    if ($_POST["userName"] && $_POST["password"]) {
        $firstName=$_POST['firstName'];
        $lastName=$_POST['lastName'];
        $userName = $_POST["userName"];
        $password = $_POST["password"];
        $accountNumber = $_POST["accountNumber"];
        $pin = $_POST["pin"];
      // create connection
      $conn = mysqli_connect("localhost", "root", "", "users");
      // check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

// sql to delete a record
$sql = "DELETE FROM student WHERE firstName='$firstName' and lastName='$lastName' and userName='$userName' and password='$password' and accountNumber='$accountNumber' and pin='$pin'";

if (mysqli_query($conn, $sql)) {
    header("Location: login.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
} else {
    echo "Nothing was submitted. Try again!";
   }
      }
?>