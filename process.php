    <?php
    session_start();
    if (isset($_POST["userName"]) && isset($_POST["password"])){
      if($_POST["userName"] && $_POST["password"]){
          $firstName = $_POST["firstName"];
          $lastName = $_POST["lastName"];
          $email = $_POST["email"];
          $userName = $_POST["userName"];
          $password = $_POST["password"];
          $state = $_POST["state"];
          $city = $_POST["city"];
          $address = $_POST["address"];
          $zipCode = $_POST["zipCode"];
          $dob = $_POST["dob"];
          $pin = $_POST["pin"];
          $balance = $_POST["balance"];
          $randomRountingNumber = rand(1000, 9999);

        $conn = mysqli_connect("localhost", "root", "", "users");

        if (!$conn){
          die("connection failed: ".mysqli_connect_error());
        }
          $sql = "INSERT INTO student(firstName, lastName, email, userName, password, state, city, address, zipCode, dob, pin, balance, routingNumber) VALUES
          ('$firstName', '$lastName', '$email', '$userName', '$password', '$state', '$city', '$address', '$zipCode', '$dob','$pin', '$balance', '$randomRountingNumber')";

          $results = mysqli_query($conn, $sql);


          if ($results){
            $_SESSION['login_user'] = $userName;
            header("location: welcome.php");
            exit();
          }
          else{
            echo mysqli_error($conn);
          }

          mysqli_close($conn);
        }
      else{
        echo "not submitted";
      }
    }
    else{
      echo "form was not submitted.";
    }
    ?>

  </body>
  </html>