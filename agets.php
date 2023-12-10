<?php

include 'link.php';

// $commad1="SELECT fname,lname FROM userinfotable";

// $result1=$link->query($commad1);

// if($result1->num_rows>0){
//     echo'<div class ="row">';
//     echo'<div class="col d-flex justify-content-center">';
//      echo'<select class="form-select" aria-label="Default select example" name="" id="">';
//      while($row=$result->fetch_assoc()){
//         echo'<option value="'.$row['fname'] .$row['lname'].'">'.$row['fname'] .$row['lname'].'</option>';
//      }
//         echo' </select></div></div>';
// }


$commad="SELECT * FROM userinfotable where urole='agent'";
$result=$link->query($commad);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
    echo'<div class="col-md-4">';
    echo'<div class="card my-3">';
    echo'<div class="card-body">';
    echo'<div class="card-text">';
    echo'<p><span>FirstName:  </span>'.$row['fname'].'</p>';
    echo'<p> <span>LastName:  </span>'.$row['lname'].'</p>';
    echo'<p><span>Email:  </span>'.$row['usernameoremail'].'</p>';
    echo'<p><span>City:  </span>'.$row['city'].'</p>';
    echo'<p><span>State:  </span>'.$row['ustate'].'</p>';
    echo'<p><span>ShopName:  </span>'.$row['shopname'].'</p>';
    echo'<p><span>phone:  </span>'.$row['phone'].'</p>';
    echo'<form action="editinfo.php" method="post" >';
    echo'<input name=q type="hidden" value='.$row['id'].'>';
    echo'<button class="btn btn-success mt-2" type="submit">Edit / More</button>';
    echo'</form>';
    echo'</div>
    </div>
  </div>
</div>';

    }
       
}
else{
    echo'No Data Inside the database';
}

?>