<?php

$host="localhost";
$user="root";
$password=""
$db="Demo"

mysql_connect($host,$user,$password);
$mysql_select_db($db);

if(isset($_POST['username'])){
  $uname=$_POST['username'];
  $password=$_POST['password'];

  $sql="select * form loginfor where user='".$uname."' AND Pass='".$password."'
  limit 1";

  $result=mysql_query($sql);

  if(mysql_num_rows($result)==1){
    echo " You Have Successfully Logged in";
    exit();
  }
  else{
    echo " You Have Entered Incorrect Password";
  }
}


?>




<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device", initial-scale=1.0>
  <title>Departmental Club</title>
  <link rel="stylesheet" type="text/css" href="css/style.css"></link>3
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <img src="img/men.gif">
    <form method="$POST" action="#">
        <div class="form-input">
          <input type="text" placeholder="Enter Username" name="username">
        </div>
        <div class="form-input">
          <input type="password" placeholder="Enter Password" name="password">
        </div>
          <div class="lsbuttons">
            <input type="submit" name="Submit" value="Login" class="btn-login">
            <input type="submit" name="Submit" value="Signup" class="btn-signup">
          </div>
        <a href="#">Forget Password?</a>
    </form>
  </div>
</body>
</html>
