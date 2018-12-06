<?php
include("config.php");

  function createNew($conn){
    global $conn;
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $sql = "SELECT * FROM users
            WHERE username = '". $username ."'";

     mysqli_query($conn, $sql);

      if(mysqli_error($conn)){
        echo "This username is already taken!";
      }
      else{
        $sql = "INSERT into users(username, password)
                VALUES('" . $username ."' , '". $password ."')";
        if (mysqli_query($conn, $sql)) {
          echo "Successful!";
        }
        else{
          echo "not successful";
        }
      }

   } // This is the end of this function lol just a reminder xD

   function login($conn){
     $myusername = mysqli_real_escape_string($conn,$_POST['myUsername']);
     $mypassword = mysqli_real_escape_string($conn,$_POST['myPassword']);

     $sql = "SELECT * FROM users WHERE username = '$myusername' and password= '$mypassword'";
     $result = mysqli_query($conn,$sql);
     $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     $count = mysqli_num_rows($result);

     // If result matched $myusername and $mypassword, table row must be 1 row

     if($count == 1) {
        header("location: test.php");
     }else {
        echo "Your Login Name or Password is invalid";
     }
   }

   if($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
      login($conn);
    }
    else if (isset($_POST['create'])) {
      header("Location: createAcc.php");
    }
    else if (isset($_POST['newAcc'])) {
      createNew($conn);
    }
    else if (isset($_POST['login'])) {
      createNew($conn);
    }
   }
?>
