<?php
session_start();
if(!isset($_SESSION['useremail'])){
header('location:login.php');
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
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

        <div class="row w-100 h-100">
            <div class="col-md-3 ">
                <div class="h-75 w-100 my-2">
                  <div class=" nav_section">
                      <div class=" pt-4">
                        <div class="d-flex justify-content-around m-3 " id="click1" >
                          <span class="material-symbols-outlined">
                            account_circle
                            </span>
                            <span>View</span>
                        </div>
                        <?php
                        include 'link.php';
                        $user=$_SESSION['useremail'];
                        $commad="SELECT urole,id FROM userinfotable where usernameoremail='$user'";
                        $result=$link->query($commad);

                        $row=$result->fetch_assoc();

                        if($row['urole'] == 'admin'){
                         echo' <div class="d-flex justify-content-around m-3 " id="click2">';
                          echo'<span class="material-symbols-outlined">info
                          </span>';
                            
                            echo'<span>Agent Infos</span>
                            </div>';

                        }else{
                          echo'<form action="editinfo.php" method="post"><input name=q type="hidden" value='.$row['id'].'><button style="width:90%" class=" btn   d-flex justify-content-around m-3 " type="submit" ><span class="material-symbols-outlined">info
                          </span> <span>Edit Info</span></button></form>'; 
                        }

                        ?>
                        
                        <a href="logout.php">
                        <div class="d-flex justify-content-around m-3" >
                          <span class="material-symbols-outlined">
                            logout
                            </span>
                            <span>Logout</span>
                        </div>
                        </a>
                        
                        
                      </div>

                  </div>
                </div> 
            </div>
            <div class="col-md-9 ">
                <div class="w-100 h-75 my-2 ">
                  <div class=" main_content overflow-y-scroll" >
                  <div class="pt-4 ">

                    <div class="row mx-3 " id="response">
                      <!-- <div class="col d-flex justify-content-center">
                        <select class="form-select" aria-label="Default select example" name="" id="">
                        <option value="">name</option>
                        <option value="">name</option>
                        <option value="">name</option>
                        <option value="">name</option>
                        <option value="">name</option>

                      </select></div>
                      <div class="col d-flex justify-content-around">
                        <select class="form-select " aria-label="Default select example" name="" id="">
                          <option value="">
                            place
                          </option>
                          <option value="">
                            place
                          </option>
                          <option value="">
                            place
                          </option>
                          <option value="">
                            place
                          </option>
                          place
                        </select>
                      </div> -->
                      
                      <!-- <div class="col-md-4">
                        <div class="card">
                          <div class='card-body'>
                            <div class="row">
                              <div class="col-md-6">
                                All Agent
                              </div>
                              <div class="col-md-6 d-flex justify-content-around">
                                <span class="material-symbols-outlined">
                                  account_circle
                                  </span>
                              </div>
                              <div class="row">
                                <div class="col text-start">
                                  <span>6</span>
                                </div>
                                <div class="col" >
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card">
                          <div class='card-body'>
                            <div class="row">
                              <div class="col-md-6">
                                All Agent
                              </div>
                              <div class="col-md-6 d-flex justify-content-around">
                                <span class="material-symbols-outlined">
                                  account_circle
                                  </span>
                              </div>
                              <div class="row">
                                <div class="col text-start">
                                  <span>6</span>
                                </div>
                                <div class="col" >
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card">
                          <div class='card-body'>
                            <div class="row">
                              <div class="col-md-6">
                                All Agent
                              </div>
                              <div class="col-md-6 d-flex justify-content-around">
                                <span class="material-symbols-outlined">
                                  account_circle
                                  </span>
                              </div>
                              <div class="row">
                                <div class="col text-start">
                                  <span>6</span>
                                </div>
                                <div class="col" >
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> -->
                      
                      <!-- <div class="col-md-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-text">
                              <p>nfjjnefnen</p>
                              <p>nfjjnefnen</p>
                              <p>nfjjnefnen</p>
                              <p>nfjjnefnen</p>
                              <p>nfjjnefnen</p>
                              <form>
                                <input>
                                <button class="btn btn-success mt-2" type="submit">Edit / More</button>
                              </form>
                              
                            </div>
                          </div>
                        </div>
                      </div> -->
                    </div>
                  </div>
                  </div>
                </div> 
            </div>
        </div>

    
</div>

<script>
  var click = document.getElementById('click1');
  var click1=document.getElementById('click2');

  function x(e){
    const x = new XMLHttpRequest()

    x.open('POST',e,true);
   x.onload=function(){
    if(x.status == 200){
      document.getElementById('response').innerHTML=this.responseText;
    }
   }
    x.send();
  }

  click.addEventListener('click',()=>{
    var file='onstart.php'
  x(file);
  })

click1.addEventListener('click',()=>{
  var file='agets.php';
  x(file);
})

window.addEventListener('load',()=>{
  var file='onstart.php'
  x(file);
})



</script>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="js/circles.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>