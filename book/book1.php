<?php
    session_start();
    require('../database.php');
    $uid=$_SESSION['shareid'];
    $cn=$_GET['cn'];
    if(isset($_POST['book'])){
        $tid=mysqli_real_escape_string($con,$_POST['tid']);
        $res=mysqli_query($con,"select * from user where id='$uid'");
        $row=mysqli_fetch_assoc($res);
        $uname=$row['name'];
        $pno=$row['phoneno'];
        $mail=$row['mail'];
        $res=mysqli_query($con,"insert into orders (name,pno,mail,tid,cname,success) values('$uname','$pno','$mail','$tid','$cn',0)");
        if(mysqli_affected_rows($con)>0){
            header('location:book2.php');
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>
        BOOK
    </title>
    <link rel="stylesheet" href="../stylehome.css">
</head>

<body class="bgpay">

    <br><br><br><br><br>
    <div class="paymentbg">
        <h1 style="font-family:'Roboto'; color: rgb(222, 60, 2); text-align: center;">Your transaction was successful.</h1>
        <form method="post">
            <p>Transaction ID: </p>
            <input type="text" name="tid" class="inputbox">
            <button type="button" name="book" class="btnpay"></button>
        </form>
        <br><br>
    </div>
</body>

</html>