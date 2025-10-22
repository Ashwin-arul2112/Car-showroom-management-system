 <?php
session_start();
require('database.php');
$msg = '';
if(isset($_POST['check'])){
    $id=$_SESSION['shareid'];
    $date=$_POST["cal"];
    $dc=date_parse($date);
    $d=$dc["day"];
    $m=$dc["month"];
    $y=$dc["year"];
    $query="select * from user where id='$id' and dob=$d and mob=$m and yob=$y";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
        header('location:userchange.php');
    }else{ 
        $msg="<h2 class='unable blinkerror'>Wrong information</h2>";
    }

    
}
?>
<!DOCTYPE html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body class="body bg1">
  <br /><br /><br />
  <hr class="redhead" />
  <h1 class="redtxt">Verify Your Date of Birth</h1>
  <hr class="redhead" />
  <br /><br />
  <br /><br /><br />
  <div class="pd">
    <form class="form" action="" method="post">
      <input
        class="tb"
        type="date"
        placeholder="DATE OF BIRTH"
        name="cal"
      />><br /><br /><br />
      <button class="btn" type="submit" name="check">CHECK</button>
    </form>
  </div>
  <br />
  <div class="txt">
    <?php echo $msg; ?>
  </div>
</body>
