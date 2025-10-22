<?php
session_start();    
require('database.php');
$btn='<button class="btn lbtn" type="submit" name="login">Login</button>';
if(isset($_POST['login'])){
    $userid=mysqli_real_escape_string($con,$_POST['id']);
    $pass=mysqli_real_escape_string($con,$_POST['pw']);
    $_SESSION['shareaid']=$userid;
    $cmd1="select * from admin where id='$userid'";
    $res1=mysqli_query($con,$cmd1);
    if(mysqli_num_rows($res1)>0){
        $command="select * from admin where id='$userid' and pass='$pass'";
        $result=mysqli_query($con,$command);
        if(mysqli_num_rows($result)>0){
                header("location:admin/amain.php");
        }else{
            $msg="<h2 class='unable blinkerror'>Wrong Password</h2>";
            $btn='<button class="btn lbtn btnwithfplink" type="submit" name="login">Login</button><a class="redlink" href="aforgot.php">forgot password</a>';
        }
    }else{
        $msg="<h2 class='unable blinkerror'>Admin ID Not Registered</h2>";
        $btn='<button class="btn lbtn btnwithidflink" type="submit" name="login">Login</button><a class="redlink" href="aidforgot.php">forgot Admin ID</a>';
    }
}
?>
<!DOCTYPE html>
<head>
    <title>
        Login
    </title>
    <link rel="stylesheet" href="stylesa.css">
</head>
<body class="">
<br><br><br><br><br><br><br><br><br><br><br><br><div>
<form class="form" action="" method="post">
    <input class="tb" type="text" placeholder="USERNAME" name="id" required></input><br><br><br>
    <input class="tb pw" type="password"  placeholder="PASSWORD" name="pw" required></input>
    <br><br><br>
    <?php echo @$btn; ?><br><br><br>
    </a>
</form><br><br>

<?php 
    echo @$msg;
?>
</body>