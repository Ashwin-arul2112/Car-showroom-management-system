<?php
session_start();
require('database.php');
$msg="";

if(isset($_POST['change'])){
  
  $id=$_SESSION['sharedidtoregister'];
  $np=mysqli_real_escape_string( $con , $_POST['new']);
  $cp=mysqli_real_escape_string( $con , $_POST['confirm']);
  if($np==$cp){
    $q="update user set pass='$np' where id='$id'";
    $res=mysqli_query($con,$q);
    if(mysqli_affected_rows($con)>0){
      $_SESSION['sharedidtoregister']="";
      header("location:user_login.php");
    }else{
      $msg="<h2 class='unable blinkerror' >Couldn't set Password</h2>";
    }
  }else{
    $msg="<h2 class='unable blinkerror' >Password Missmatch</h2>";
  }
}
?>
<!DOCTYPE html>
<head>
  <title>SET PASSWORD</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body class="body bg1">
    <form  class="inline split form" action="">
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> 
        <hr class=" redhead"><br>
        <h1 class=" red">SET PASSWORD</h1><br>
        <hr class=" redhead"><br>
    </form>
  <form class="inline split form" action="" method="post">
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <input
      class="stb"
      type="password"
      placeholder="PASSWORD"
      name="new"
    /><br /><br /><br />
    <input
      type="password"
      class="stb"
      placeholder="CONFIRM PASSWORD"
      name="confirm"
    /><br /><br /><br />
    <button class="sbtn" name="change">SET</button><br />
  </form>
  <div>
    <?php echo $msg ?>
  </div>
</body>

