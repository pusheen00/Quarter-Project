<html>
   <head>
      <title>Login Page</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=Device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="externalcss.css">
      <style>
      </style>

   </head>

   <body>
     <!-- Nav bar -->
     <nav class="navbar navbar-default navbar-static-top">
       <div class="container-fluid">
         <ul class="nav navbar-nav">
           <li><a class="active" href="#"><span class="glyphicon glyphicon-home"></span></a></li>
         </ul>
         <ul class="nav navbar-nav navbar-right">
           <li><a href="createAcc.php"> Create Account </a></li>
         </ul>
       </div>
     </nav>

    <div class="container-fluid center-block">
       <div class="row">

         <div class="col-sm-4">
           <span class="glyphicon glyphicon-education logo"></span>
         </div>

         <form class= "col-sm-6 align-middle" action="database.php" method ="post">
         <div class="panel panel-default">

           <div class="panel-heading text-center">
             <h1> Log in </h1>
           </div>

           <div class="panel-body">

             <div class=" form-group">
                <label>UserName: </label>
                <input type="text" name = "myUsername" class="form-control">
              </div>

              <div class="form-group">
                <label>Password:</label>
                <input type="password" name="myPassword" class="form-control">
              </div>

              <div class="form-group">
                <div class="col-sm-12">
                  <input class="form-control" type = "submit" name ="submit"value = "Submit"/>
                </div>
              </div>

              <div class="form-group text-center">
                <label> <br> Don't have an account? </label>
                <div class="col-sm-12">
                  <input class="form-control" type = "submit" name="create" value = "Create one today!"/>
                </div>

              </div>
            </div>
            </div>
            </form>

            </div>
          </div>
   </body>
</html>
