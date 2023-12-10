<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login | Aim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=Dongle:wght@300&family=Outfit&family=Roboto+Slab:wght@300&family=Teko:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <!-- header section -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img class=" "  src="images/aimuniverss brand.png">
                 <span style="font-family: 'Cinzel Decorative';  color:#1520A6;" class="" >
                  Aimuniversse
                 </span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <ul class ="navbar-nav">
                <li class="nav-item  mx-2 fs-5 active">
                    <a class="nav-link" href="index.html">Home</a>
                  </li>
                  <li class="nav-item mx-2 fs-5 ">
                    <a class="nav-link" href="index.html#aboutsection">About </a>
                  </li>
                  <li class="nav-item mx-2 fs-5 ">
                    <a class="nav-link" href="index.html#companys">companys </a>
                  </li>
                  <li class="nav-item mx-2 fs-5 ">
                    <a class="nav-link" href="index.html#contact">Job Apply</a>
                  </li>
                  
                  <li class="nav-item mx-2 fs-5 ">
                    <a class="nav-link" href="index.html#footer">Contact us</a>
                  </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    <!-- end header section -->
<div class="main"> 

        <div class=" row main_child">
            <div class=""></div>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="row g-3 needs-validation" novalidate>
                <div class =" col-md-12 title"> <h1 class="text-center text-success">Register</h1></div>
                <div class="col-md-4">
                  <label for="validationCustom01" class="form-label">First name</label>
                  <input type="text" class="form-control" name="ufname" id="validationCustom01"  required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom02" class="form-label">Last name</label>
                  <input type="text" class="form-control" name='ulname' id="validationCustom02"  required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustomUsername" class="form-label">Email</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="email" class="form-control" name='uname' id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                      Please choose a username.
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">Password</label>
                    <input type="password" class="form-control" name='upassword' id="validationCustom03" required>
                    <div class="invalid-feedback">
                      Please provide a valid city.
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">Conform Password</label>
                    <input type="password" class="form-control" name='ucpassword' id="validationCustom03" required>
                    <div class="invalid-feedback">
                      Please provide a valid city.
                    </div>
                  </div>
                <div class="col-md-4">
                  <label for="validationCustom03" class="form-label">City</label>
                  <input type="text" class="form-control" name='ucity' id="validationCustom03" required>
                  <div class="invalid-feedback">
                    Please provide a valid city.
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom04" class="form-label">State</label>
                  <input class="form-control " name='ustate' required>
                  <div class="invalid-feedback">
                    Please select a valid state.
                  </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom04" class="form-label">Shop Name</label>
                    <input class="form-control " name='usname' required>
                    <div class="invalid-feedback">
                      Please select a valid state.
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom04" class="form-label">Phone Number</label>
                    <input class="form-control " name='uphone' required>
                    <div class="invalid-feedback">
                      Please select a valid state.
                    </div>
                  </div>
                
                <div class="col-12 pt-4 text-center">
                  <button class="btn btn-primary" name="submit" type="submit">Register</button>
                </div>
                <div class="col-md-12 text-center">
                    <span>I Already Have Account <a href="login.php" class="">Login</a></span>
                </div>
              </form>
        </div>

    
</div>


<script src="js/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="js/circles.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>

<?php
  include 'link.php';

  if(isset($_POST['submit'])){

    $ufname=$_POST['ufname'];
    $ulname=$_POST['ulname'];
    $uname=$_POST['uname'];
    $upass=$_POST['upassword'];
    $hashpassw=password_hash($upass,PASSWORD_DEFAULT);
    $ucpass=$_POST['ucpassword'];
    $ucity=$_POST['ucity'];
    $ustate=$_POST['ustate'];
    $usname=$_POST['usname'];
    $uphone=$_POST['uphone'];
    $role="agent";

    if($upass == $ucpass){
      $commad="INSERT INTO userinfotable (fname,lname,usernameoremail,upassword,city,ustate,shopname,phone,urole) value('$ufname','$ulname','$uname','$hashpassw','$ucity','$ustate','$usname','$uphone','$role')";
      
      if($link->query($commad)){
        echo'<script>alert("your seccesfully Registered now you Login")</script>';
      }
      else{
        if($link->errno == 1062){
          echo'<script>alert("please check the user name this is already exist and try Again")</script>';
          
        }
        else{
          echo'<script>alert("try Again")</script>';
        }
        
        
      }
      
    }
    else{
      echo'<script>alert("password is not match please check once")</script>';
    }

  }

?>