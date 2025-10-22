<?php
session_start();
require('database.php');
$msg="";
$id=$_SESSION['shareid'];

if(isset($_POST['change'])){
  $np=mysqli_real_escape_string( $con , $_POST['new']);
  $cp=mysqli_real_escape_string( $con , $_POST['confirm']);
  if($np==$cp){
    $q="update user set pass='$np' where id='$id'";
    $res=mysqli_query($con,$q);
    if(mysqli_affected_rows($con)>0){
      header("location:user_login.php");
    }else{
      $msg="<h2 class='unable blinkerror' >Couldn't Change Password</h2>";
    }
  }else{
    $msg="<h2 class='unable blinkerror' >Password Missmatch</h2>";
  }
}
?>
<!DOCTYPE html>
<head>
  <title>NEW PASSWORD</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body class="body bg1">
  <form class="form" action="" method="post">
    <br /><br />
    <h1 class="red">
        Change Password
    </h1>
    <br /><br /><br /><br /><br /><br /><br /><br />
    <input
      class="tb"
      type="password"
      placeholder="NEW PASSWORD"
      name="new"
    /><br /><br /><br />
    <input
      type="password"
      class="tb"
      placeholder="CONFIRM PASSWORD"
      name="confirm"
    /><br /><br /><br />
    <button class="btn" name="change">CHANGE</button><br />
  </form>
  <div>
    <?php echo $msg ?>
  </div>
</body>

