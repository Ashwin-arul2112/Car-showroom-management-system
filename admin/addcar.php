<?php
    session_start();
    require('../database.php');
    if(isset($_POST['addd'])){
        $n=mysqli_real_escape_string($con,$_POST['name']);
        $fn=mysqli_real_escape_string($con,$_POST['fimg']);
        
        $b=mysqli_real_escape_string($con,$_POST['brand']);
        $name="../images/".$b."/".$fn;
        $p=mysqli_real_escape_string($con,$_POST['price']);
        $f=mysqli_real_escape_string($con,$_POST['fuel']);
        $no=mysqli_real_escape_string($con,$_POST['avc']);
        // $image = $_FILES['file']['tmp_name'];
        // $imgc = addslashes(file_get_contents($image));
        // Get image type
        // $imgt = $_FILES['file']['type'];
        // Get image name
        // $imgn = $_FILES[""]['size'];
        // echo $name;
        $res=mysqli_query($con,"insert into carss values('$n','$b',$p,'$f','$name',$no)");
        if(mysqli_affected_rows($con)>0){
            header('location:../amain.php');
        }
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>
            Admin
        </title>
        <link rel="stylesheet" href="../admin.css">
    </head>
    <body class="bg1" >
        <nav class="navbar">
            <font face="Sans-Serif" size="4">
              <b>
                <a class="navlink" href="home.php">Home</a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="navlink" href="listings.php">Listings</a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="navlink" href="contact.php">Contact Us</a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </b>
            </font>
        </nav>
<br><br><br><br><br><br>    
<div class="formbox">
        <form method="post">
            <h1 style="text-align: center;font-family: 'Times New Roman', Times, serif; color: white;">Add Cars to Showroom</h1>
            <input class="tb" type="text" placeholder="Name of Car" name="name" required>
            <br><br><br>
           
            <select class="tb1" name="brand" required>
                <option value="BMW">BMW</option>
                <option value="AUDI">AUDI</option>
                <option value="RR">ROLLS ROYCE</option>
                <option value="BENZ">BENZ</option>
                <option value="PORSCHE">PORSCHE</option>
                <option value="JAGUAR">JAGUAR</option>
                <option value="LAMBORGHINI">LAMBORGHINI</option>
                <option value="FERRARI">FERRARI</option>
            </select>
            <br><br><br>
            <input class="tb" type="text" placeholder="Price" name="price" required>
            <br><br><br>
            
            <select class="tb1" name="fuel" required>
                <option value="Petrol">PETROL</option>
                <option value="Diesel">DIESEL</option>
            </select>
            <br><br><br>
            <input class="tb" type="text" name="avc" placeholder="Number of Cars" required>
            <br><br><br>
            <h3 for="file" style="font-family: 'Times New Roman', Times, serif; margin-left:5%">Choose an image:</h3>
            <input class="tb1" type="file" name="fimg" required>
            <br><br><br>
            <center><button class="btn" type="submit" name="addd">ADD CAR</button></center>
        </form>
</div>
</div>
        <?php echo @$imgc; ?>
    </body>
</html>