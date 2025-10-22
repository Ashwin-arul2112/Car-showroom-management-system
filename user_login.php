<?php
session_start();    
require('database.php');
$btn='<button class="btn lbtn" type="submit" name="login">Login</button>';
if(isset($_POST['login'])){
    $userid=mysqli_real_escape_string($con,$_POST['id']);
    $pass=mysqli_real_escape_string($con,$_POST['pw']);
    $_SESSION['shareid']=$userid;
    $cmd1="select * from user where id='$userid'";
    $res1=mysqli_query($con,$cmd1);
    if(mysqli_num_rows($res1)>0){
        $command="select * from user where id='$userid' and pass='$pass'";
        $result=mysqli_query($con,$command);
        if(mysqli_num_rows($result)>0){
                header("location:main.php");
        }else{
            $msg="<h2 class='unable blinkerror'>Wrong Password</h2>";
            $btn='<button class="btn lbtn btnwithfplink" type="submit" name="login">Login</button><a class="redlink" href="userforgot.php">forgot password</a>';
        }
    }else{
        $msg="<h2 class='unable blinkerror'>User ID Not Registered</h2>";
        $btn='<button class="btn lbtn btnwithidflink" type="submit" name="login">Login</button><a class="redlink" href="useridforgot.php">forgot user ID</a>';
    }
}
?>
<!DOCTYPE html>
<head>
    <title>
        Login
    </title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="body bg1">
<br><br><br><br><br><br><br><br><br><br><br><br><div>
<form class="form" action="" method="post">
    <input class="tb" type="text" placeholder="USERNAME" name="id" required></input><br><br><br>
    <input class="tb pw" type="password"  placeholder="PASSWORD" name="pw" required></input>
    <br><br><br>
    <?php echo @$btn; ?><br><br><br>
    <a href="register.php"><button class="btn btnfull" type="button">I Dont Have a Account</button>
    </a>
</form><br><br>

<?php 
    echo @$msg;
?>
</body>