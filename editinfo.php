
<?php
if(!isset($_POST['q'])){
  header('location:dashboard.php');
}
?>

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
            <?php
             include 'link.php';

             $id=$_POST['q'];

             $commad="SELECT * FROM userinfotable WHERE id='$id'";

             $result=$link->query($commad);

              if($result->num_rows>0){
                $row=$result->fetch_assoc();
                echo ' <form action="updateinfo.php" method="post" class="row g-3 " >
                <div class =" col-md-12 title"> <h1 class="text-center text-success">Update information</h1></div>
                <div class="col-md-6">
                  <label for="validationCustom01" class="form-label">First name</label>
                  <input type="text" value="'.$row['fname'].'" class="form-control" name="ufname" id="validationCustom01"  required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="validationCustom02" class="form-label">Last name</label>
                  <input type="text" value="'.$row['lname'].'" class="form-control" name="ulname" id="validationCustom02"  required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                            
                <div class="col-md-6">
                  <label for="validationCustom03" class="form-label">City</label>
                  <input type="text" value="'.$row['city'].'" class="form-control" name="ucity" id="validationCustom03" required>
                  <div class="invalid-feedback">
                    Please provide a valid city.
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="validationCustom04" class="form-label">State</label>
                  <input class="form-control " value="'.$row['ustate'].'" name="ustate" required>
                  <div class="invalid-feedback">
                    Please select a valid state.
                  </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom04" class="form-label">Shop Name</label>
                    <input class="form-control " value="'.$row['shopname'].'" name="usname" required>
                    <div class="invalid-feedback">
                      Please select a valid state.
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="validationCustom04" class="form-label">Phone Number</label>
                    <input class="form-control " value="'.$row['phone'].'" name="uphone" required>
                    <div class="invalid-feedback">
                      Please select a valid state.
                    </div>
                  </div>
                  <input  name="q" type="hidden" value="'.$row['id'].'">
                <div class="col-12 pt-4 text-center">
                  <button class="btn btn-primary" name="submit" type="submit">Update</button>
                </div>
                
              </form>';

              }

            ?>
            
        </div>

    
</div>


<script src="js/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="js/circles.min.js"></script>
<!-- <script src="js/custom.js"></script> -->
</body>
</html>
