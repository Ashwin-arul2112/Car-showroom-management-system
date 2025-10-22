<?php
session_start();
require('database.php');
if(isset($_POST['next'])){
  $id=$_SESSION['sharedidtoregister'];
  $name=mysqli_real_escape_string($con,$_POST['name']);
  $date=$_POST['dob'];
  $dmy=date_parse($date);
  $d=$dmy["day"];
  $m=$dmy["month"];
  $y=$dmy["year"];
  $pno=mysqli_real_escape_string($con,$_POST["number"]);
  $mid=mysqli_real_escape_string($con,$_POST["mail"]);
  $q1="select * from user where phoneno='$pno'";
  $res1=mysqli_query($con,$q1);
  if(mysqli_num_rows($res1)>0){
    $msg='<h2 class="unable blinkerror">Mobile Number Already Registered</h2>'; 
  }else{
    $q2="select * from user where mail='$mid'";
    $res2=mysqli_query($con,$q2);
    if(mysqli_num_rows($res2)){
      $msg='<h2 class="unable blinkerror">Mail ID Already Registered</h2>'; 
    }else{
      $q3="insert into user (id,name,dob,mob,yob,phoneno,mail) values('$id','$name',$d,$m,$y,'$pno','$mid')";
      $res3=mysqli_query($con,$q3);
      if(mysqli_affected_rows($con)>0){
        header('location:user_register2.php') ;
      }else{
        $msg='<h2 class="unable blinkerror">Unable to Register</h2>'; 
      }
    }
  }
}
?>
<!DOCTYPE html>
<head>
  <title>REGISTER</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body class="body bg1">
  <br /><br />
  <hr class="redhead" />
  <h1 class="redtxt">Register User</h1>
  <hr class="redhead" />
  <form action="" method="post" class="form">
    <br /><br /><br />
    <input
      class="tb"
      type="text"
      name="name"
      placeholder="NAME"
      required
    /><br /><br /><br />
    <input class="tb" type="date" name="dob" required/><br /><br /><br />
    <input
      class="tb"
      type="text"
      name="number"
      placeholder="MOBILE NUMBER"
      required
    /><br /><br /><br />
    <input
      class="tb"
      type="text"
      name="mail"
      placeholder="MAIL ID"
      required
    /><br /><br /><br />
    <button class="btn" name="next">Next</button>
  </form>
  <?php echo @$msg; ?>
</body>
