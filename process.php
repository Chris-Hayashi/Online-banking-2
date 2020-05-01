    <?php
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
          $accountNumber = $_POST["accountNumber"];
          $pin = $_POST["pin"];
          $balance = $_POST["balance"];


        $conn = mysqli_connect("localhost", "root", "", "users");

        if (!$conn){
          die("connection failed: ".mysqli_connect_error());
        }
          $sql = "INSERT INTO student(firstName, lastName, email, userName, password, state, city, address, zipCode, dob, accountNumber, pin, balance) VALUES
          ('$firstName', '$lastName', '$email', '$userName', '$password', '$state', '$city', '$address', '$zipCode', '$dob', '$accountNumber', '$pin', '$balance')";

          $results = mysqli_query($conn, $sql);

          if ($results){
            header("location: welcome.php");
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
