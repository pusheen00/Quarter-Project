<!DOCTYPE html>
<html>
<head>
<title> Create an account </title>

<!-- Bootstrap reference-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- External Css -->
  <link rel="stylesheet" type="text/css" href="externalcss.css">

</head>

<!-- Nav Bar-->

<body>
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li><a class="active" href="#"><span class="glyphicon glyphicon-home"></span></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"> Login </a></li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid">

       <form class= "col-sm-8 align-middle" action="database.php" method ="post">
       <div class="panel panel-default">

         <div class="panel-heading text-center">
           <h1> Personal information </h1>
         </div>

         <div class="panel-body">

           <div class="form-group">
             <label> First name</label>
             <input type="text" name="fname" class="form-control">
           </div>

           <div class="form-group">
             <label> Last name </label>
             <input type="text" name="lname" class="form-control">
           </div>

           <div class="form-group">
             <label for="birthday">Birthday </label>
             <input type="date" name="bday" class="form-control">
           </div>

            </div>
          </div>

         <div class="panel panel-default">

         <div class="panel-heading text-center">
           <h1> Account Details </h1>
         </div>

         <div class="panel-body">

           <div class=" form-group">
              <label>Username: </label>
              <input type="text" name = "username" class="form-control" required>
            </div>

            <div class="form-group" >
              <label>Password:</label>
              <input type="password" name="password" id="password" onfocus="popup()" class="form-control" required>
              <p id="myPopup">At least 2 letter, 1 number symbol, 1 other symbol, & 5 chars</p>
            </div>

            <div class="form-group align-middle">
              <progress max="100" width="100px"value="0" class= "form-control" id="passStrength"></progress>
              <p id="password-strength-text">  </p>
            </div>

          </div>
          </div>

        <div class="panel panel-default">
          <div class="panel-body">

          <div class="form-group">
            <div class="col-sm-12">
              <input class="form-control" type = "submit" name ="newAcc" id="submit" value = "Submit">
            </div>
          </div>

          <div class="form-group text-center">
            <label> <br> Already have an account? </label>
            <div class="col-sm-12">
              <input class="form-control" type = "submit" name="login" value = "Login"/>
            </div>
          </div>

         </div>
          </form>

          </div>
        </div>

        <!--Javascript file-->
        <script src="passwordchecker.js"></script>
</body>
</html>
