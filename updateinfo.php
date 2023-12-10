<?php
include 'link.php';
if(isset($_POST['submit'])){
    $id=$_POST['q'];
    $ufname=$_POST['ufname'];
    $ulname=$_POST['ulname'];
    $ucity=$_POST['ucity'];
    $ustate=$_POST['ustate'];
    $usname=$_POST['usname'];
    $uphone=$_POST['uphone'];

      $commad="UPDATE userinfotable SET fname ='$ufname',lname='$ulname',city='$ucity',ustate='$ustate',shopname='$usname',phone='$uphone' WHERE id=$id" ;
      
      if($link->query($commad)){
        echo'<script>alert("Update seccesfully...")</script>';
        echo'<script>location.href="dashboard.php"</script>';

      }
      else{
        
          echo'<script>alert("please try Again")</script>';
          
      }
      

  }
?>