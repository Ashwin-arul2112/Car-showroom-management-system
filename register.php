<?php
    session_start();
    require("database.php");
    if(isset($_POST['submit'])){
        $id=mysqli_real_escape_string($con,$_POST['username']);
        $res=mysqli_query($con,"select * from user where id='$id'");
        if(mysqli_num_rows($res)>0){
            $msg="<h2 class='unable blinkerror'>Username Already Taken</h2>";
        }else{
            $_SESSION['sharedidtoregister']=$id;
            header("location:user_register1.php");
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body class="body bg1">
        <form method="post" class="form">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <input class="tb" type="text" placeholder="Username" name="username">
            <br><br><br><br>
            <button class="btn" type="submit" name="submit">Check Availability</button>
        </form>

        <?php echo @$msg; ?>
    </body>
</html>