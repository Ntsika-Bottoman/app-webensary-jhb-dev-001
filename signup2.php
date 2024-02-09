<?php
session_start();

  include("db_conn.php");
  include("function.php");

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    // Something was pressed and posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        // Save to db
        $user_id = random_num(20);
        $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

        mysqli_query($conn, $query);

        header("Location: logegphphtml.php");
        die;
    }else
    {
        echo "Please enter some valid info!";
    }
  }


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="./styles/style.css" />
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/carousel.css">
    <title>Webensary - Online Dispensary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </head>
  <body>

    <div class="our-container">
        <header class="nav-bar-top">
          <div class="left-hand-side">
            <nav class="navbar navbar-light bg-light">
              <div class="container-fluid">
                
                
              </div>
            </nav>
          </div>
        </header>
        
        <nav>
          <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark" style="border-radius: 5px;">
            <div class="bg-dark p-4">
              <h5 class="text-body-emphasis h4">Collapsed content</h5>
              <span class="text-body-secondary">Toggleable via the navbar brand.</span>
            </div>
          </div>
        </nav>
        
        <main>
        <h2>Sign-up</h2>
    <br>
    <form method="post">
        <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">User sign-up</h5>  
                <div class="mb-3">

                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="user_name" >
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password" >
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1_Confirmation" class="form-label">Confirm Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1_Confirmation">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Remember?</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
        </div>
<!--           Register card           -->
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Back to login</h5>
                <a href="logegphphtml.php">
                <button type="button" class="btn btn-primary">Log in</button>
                </a>
            </div>
            </div>
        </div>
        </div>
    </form>
        </main>
    
        <aside>

        </aside>
    
        <footer>
            
        </footer>
    </div>

  </body>
</html>