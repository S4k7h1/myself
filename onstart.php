<?php

session_start();
include 'link.php';

$user=$_SESSION['useremail'];

$commad="SELECT COUNT(id) as allcount,COUNT(DISTINCT city) as citycount FROM userinfotable WHERE urole='agent'";

$commad1="SELECT urole FROM userinfotable WHERE usernameoremail='$user'";

$result1=$link->query($commad1);
$result=$link->query($commad);

$row=$result->fetch_assoc();

$row1=$result1->fetch_assoc();
if($row1['urole']=='admin'){
    echo'<div class="col-md-4">
    <div class="card">
      <div class="card-body">
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
              <span>'.$row['allcount'].'</span>
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
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            All Location
          </div>
          <div class="col-md-6 d-flex justify-content-around">
            <span class="material-symbols-outlined">
              account_circle
              </span>
          </div>
          <div class="row">
            <div class="col text-start">
              <span>'.$row['citycount'].'</span>
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
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            Toatal Serves
          </div>
          <div class="col-md-6 d-flex justify-content-around">
            <span class="material-symbols-outlined">
              account_circle
              </span>
          </div>
          <div class="row">
            <div class="col text-start">
              <span>?</span>
            </div>
            <div class="col" >
              
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>';
}else{
    echo"";
}

?>