<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
<!-------------------------navbar------------------------------>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <div class="container-fluid">

        <!-- Logo -->
        <div class="navbar-header">
            <a href="#" class="navbar-brand">M/s. Y. V. Fargade & Co<sup>&#8482</sup></a>
        </div>

    </div>
</nav>

<!--------------------------------loginform----------------------->
<div class="fillform">
<div class="container-fluid">
    <div class="col-sm-4 col-sm-offset-4">
      <h1 class="text-center">Login</h1>
      
      <form action="checklogin.php" role="form" method="post">
  <div class="form-group">
    <label>Email:</label>
    <input type="text" class="form-control"name="username" placeholder="Enter Your Username">
  </div>
  
  <div class="form-group">
    <label>Password:</label>
    <input type="password" class="form-control"name="password" placeholder="Enter Your Password">
  </div>
  
  <div class="col-md-12 text-center">
  <input type="submit" class="btn btn-primary btn-md" value="Login">
  </div>
  
   </form>
    </div>
 </div>
</div>

<footer>
    <pre>
    For further queries contact us on:
    Phone No:9767340536
    Email:chetanpawar968@gmail.com
    </pre>
</footer>


</body>
</html>