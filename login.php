<?php 
  if( isset($_POST["submit"]) ){
    if($_POST["password"] == "1619"){
      header("Location: menulogin.html");
      exit;
    } else{
      $error = true; 
    }
  }

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Login</title>
  </head>
       <body class="bg-secondary">
          <div class="container">
              <br><br>
  
                 <div class="offset-md-3 col-md-6 mt-5 pl-3 bg-light rounded shadow-lg border border-dark">
                    <h1 class="mt-3 pt-5 text-center fst-italic text-secondary">Login Duls yekan</h1>
                    <form action="" method="post">
                      <div class="input-group mt-5 mb-5 shadow-sm">
                      <span class="input-group-text fa fa-user"></span>
                      <input type="text" class="form-control" placeholder="username" name="username" require="">
                      </div>

                      <div class="input-group mt-5 shadow-sm">
                      <span class="input-group-text fa fa-lock"></span>
                      <input type="password" class="form-control" placeholder="password" name="password" require="">
                      </div>

                      <center>
                        <button type="submit" name="submit" class="btn btn-info mt-5 "> submit</button>
                      </center>
                      <br><br>
                    </form>

                  </div>

            </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>