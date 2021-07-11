<?php
require_once "config.php";

$username = $password = $confirm_password = $email = $phone = $branch = $year = $domain = "";
$username_err = $password_err = $confirm_password_err = $email_err = $phone_err = $branch_err = $year_err = $domain_err = "";





if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
        // echo '<script>alert("username cannot be blank")</script>';
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);





// Check if email is empty
if(empty(trim($_POST["email"]))){
  $email_err = "email cannot be blank";
  // echo '<script>alert("username cannot be blank")</script>';
}
else{
  $sql = "SELECT id FROM users WHERE email = ?";
  $stmt = mysqli_prepare($conn, $sql);
  if($stmt)
  {
      mysqli_stmt_bind_param($stmt, "s", $param_email);

      // Set the value of param username
      $param_email = trim($_POST['email']);

      // Try to execute this statement
      if(mysqli_stmt_execute($stmt)){
          mysqli_stmt_store_result($stmt);
          if(mysqli_stmt_num_rows($stmt) == 1)
          {
              $email_err = "This username is already taken"; 
          }
          else{
              $email = trim($_POST['email']);
          }
      }
      else{
          echo "Something went wrong";
      }
  }
}

mysqli_stmt_close($stmt);






// Check if email is empty
if(empty(trim($_POST["phone"]))){
  $phone_err = "email cannot be blank";
  // echo '<script>alert("username cannot be blank")</script>';
}
else{
  $sql = "SELECT id FROM users WHERE phone = ?";
  $stmt = mysqli_prepare($conn, $sql);
  if($stmt)
  {
      mysqli_stmt_bind_param($stmt, "s", $param_phone);

      // Set the value of param username
      $param_phone = trim($_POST['phone']);

     // Try to execute this statement
      if(mysqli_stmt_execute($stmt)){
          mysqli_stmt_store_result($stmt);
          if(mysqli_stmt_num_rows($stmt) == 1)
          {
             $phone_err = "This phone number is already taken"; 
         }
         else{
              $phone = trim($_POST['phone']);
         }
     }
      else{
          echo "Something went wrong";
      }
  }
}

mysqli_stmt_close($stmt);






// Check if email is empty
if(empty(trim($_POST["branch"]))){
  $branch_err = "branch cannot be blank";
  // echo '<script>alert("username cannot be blank")</script>';
}
else{
  $sql = "SELECT id FROM users WHERE branch = ?";
  $stmt = mysqli_prepare($conn, $sql);
  if($stmt)
  {
      mysqli_stmt_bind_param($stmt, "s", $param_branch);

      // Set the value of param username
      $param_branch = trim($_POST['branch']);

      $branch = trim($_POST['branch']);

      // Try to execute this statement
      // if(mysqli_stmt_execute($stmt)){
      //     mysqli_stmt_store_result($stmt);
      //     if(mysqli_stmt_num_rows($stmt) == 1)
      //     {
      //         $branch_err = "This username is already taken"; 
      //     }
      //     else{
      //         $branch = trim($_POST['branch']);
      //     }
      // }
      // else{
      //     echo "Something went wrong";
      // }
  }
}

mysqli_stmt_close($stmt);











// Check if email is empty
if(empty(trim($_POST["year"]))){
  $year_err = "year cannot be blank";
  // echo '<script>alert("username cannot be blank")</script>';
}
else{
  $sql = "SELECT id FROM users WHERE year = ?";
  $stmt = mysqli_prepare($conn, $sql);
  if($stmt)
  {
      mysqli_stmt_bind_param($stmt, "s", $param_year);

      // Set the value of param username
      $param_year = trim($_POST['year']);

      $year = trim($_POST['year']);

      // Try to execute this statement
      // if(mysqli_stmt_execute($stmt)){
      //     mysqli_stmt_store_result($stmt);
      //     if(mysqli_stmt_num_rows($stmt) == 1)
      //     {
      //         $year_err = "This username is already taken"; 
      //     }
      //     else{
      //         $year = trim($_POST['year']);
      //     }
      // }
      // else{
      //     echo "Something went wrong";
      // }
  }
}

mysqli_stmt_close($stmt);







// Check if email is empty
if(empty(trim($_POST["domain"]))){
  $domain_err = "domain cannot be blank";
  // echo '<script>alert("username cannot be blank")</script>';
}
else{
  $sql = "SELECT id FROM users WHERE domain = ?";
  $stmt = mysqli_prepare($conn, $sql);
  if($stmt)
  {
      mysqli_stmt_bind_param($stmt, "s", $param_domain);

      // Set the value of param username
      $param_domain = trim($_POST['domain']);

      $domain = trim($_POST['domain']);

      // Try to execute this statement
      // if(mysqli_stmt_execute($stmt)){
      //     mysqli_stmt_store_result($stmt);
      //     if(mysqli_stmt_num_rows($stmt) == 1)
      //     {
      //         $domain_err = "This username is already taken"; 
      //     }
      //     else{
      //         $domain = trim($_POST['domain']);
      //     }
      // }
      // else{
      //     echo "Something went wrong";
      // }
  }
}

mysqli_stmt_close($stmt);









// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
    
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
}


// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($email_err) && empty($phone_err) && empty($branch_err) && empty($year_err) && empty($domain_err))
{
    $sql = "INSERT INTO users (username, password, email, phone, branch, year, domain) VALUES ('$username', '$password', '$email', '$phone', '$branch', '$year', '$domain')";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password, $param_email, $param_phone, $param_branch, $param_year, $param_domain);

        // Set these parameters
        $param_username = $username;
        // $param_password = password_hash($password, PASSWORD_DEFAULT);
        $param_password = $password;
        $param_email = $email;
        $param_phone = $phone;
        $param_branch = $branch;
        $param_year = $year;
        $param_domain = $domain;

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location: login.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}

?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="register.css">
    <title>PHP login system!</title>
    
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
          <a href="./index.html" class="navbar-brand"><img src="https://www.spectrumcet.com/assets/mozclub%20logo.png" alt="logo" style="width: 40px; margin-left: 100px;">Spectrum</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
             </button>

          <!-- links -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto" style="margin-right: 100px;">
               <li class="nav-item" style="margin-right: 30px;">
                    <a href="./index.html" class="nav-link" rel="noopener">About Us</a>
               </li>
               <li class="nav-item">
                    <a href="./index.html" class="nav-link" rel="noopener" style="margin-right: 30px;">Projects</a>
               </li>
               <li class="nav-item">
                    <a href="./index.html" class="nav-link" rel="noopener" style="margin-right: 50px;">Contact Us</a>
               </li>
               <li class="nav-item">
                    <a href="login.php" class="nav-link" style="margin-right: 50px;">LogIn</a>
               </li>
               
          </ul>
          </div>
     </nav>

<div class="container mt-4">
<h3>Please Register Here:</h3>
<hr>
<form action="" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputUsername">Username</label>
      <input type="text" class="form-control" name="username" id="username" placeholder="Username">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name ="password" id="inputPassword" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
      <label for="inputPassword4">Confirm Password</label>
      <input type="password" class="form-control" name ="confirm_password" id="inputConfirmPassword" placeholder="Confirm Password">
    </div>
  <div class="form-group">
    <label for="inputEmail">Email</label>
    <input type="email" class="form-control" name ="email" id="inputemail" placeholder="Enter a valid email">
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="phoneNumber">Phone Number</label>
      <input type="number" class="form-control" name="phone" id="inputphone">
    </div>
    <div class="form-group col-md-3">
      <label for="inputBranch">Branch</label>
      <input type="text" class="form-control" name="branch" id="inputbranch">
    </div>
    <div class="form-group col-md-3">
      <label for="inputYear">Year</label>
      <input type="text" class="form-control" name="year" id="inputyear">
    </div>
    <div class="form-group col-md-3">
      <label for="inputDomain">Domain</label>
      <input type="text" class="form-control" name="domain" id="inputdomain">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary" id="sign-in-btn">Sign in</button>
</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- <script src="register.js"></script> -->
  </body>
</html>
