<?php 
    session_start();
    require('database.php');
    if(isset($_POST['recover'])){
        $number=mysqli_real_escape_string($con,$_POST['num']);
        $q="select id from user where mail='$number'";
        $res=mysqli_query($con,$q);
        if(mysqli_num_rows($res)>0){ $row=mysqli_fetch_assoc($res);
            $id=$row['id']; 
            $msg="<h2 class='success' >Your Id : ".$id."</h2>";
          }else{
            $msg="<h2 class='unable blinkerror' >Mail ID Not Registered</h2>";
          } 
      } 
?>
<!DOCTYPE html>
<head>
  <title>RECOVER ID</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body class="body bg1">
  <form action="" class="center" method="post">
    <br><br>
    <h1 class="red">
      Recover Using Mail ID
    </h1><br><br><br><br><br><br><br><br><br><br>
    <input class="tb" type="text" name="num" />
    <br><br><br>
    <button class="btn" name="recover">Recover ID</button>
    <br><br><br><br><br>
  </form>
  <div class="">
    <?php 
    echo @$msg;
    ?>
  </div>
</body>
