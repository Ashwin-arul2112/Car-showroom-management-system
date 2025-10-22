<?php
  session_start();
  require('../database.php');
  $res=mysqli_query($con,"select * from carss where brand='ferrari'");
?>
<!DOCTYPE html>
<html><head><title>FERRARI</title><link rel="stylesheet" href="stylebmw.css"></head>
<body class="bgbmw">
<nav class="navbar">
      <font face="Sans-Serif" size="4"
        ><b>
          <a class="navlink" href="home.php">Home</a
          >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a class="navlink" href="aboutus.php">About</a
          >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a class="navlink" href="listings.php">Listings</a
          >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a class="navlink" href="contact.php">Contact Us</a
          >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </b></font>
</nav>
<br /><br /><br /><br /><br /><br />
<?php
  while($row=mysqli_fetch_array($res)){
    echo '<div class="pagebg">';
    echo '<div style="display: inline-block; vertical-align: middle; margin-left: 5%;">';
    echo '<h1 style="font-family: times new roman, serif">'.$row['name'].'</h1>';
    echo '<h3 style="font-family: times new roman, serif; color: rgb(70, 68, 68);">'.$row['fuel'].'</h3>';
    echo '<h3 style="font-family: times new roman, serif; font-weight: lighter;">Starting from ₹ '.$row['price'].'</h3>';
    echo '</div>';
    echo '<div style="display: inline-block; vertical-align: middle; margin-left: 30%;">';
    echo '<a href="../book/book.php?cn='.$row['name'].'"><img class="expand" src="'.$row['img'].'"></a>';
    echo '</div>';
    echo '</div>';
    echo '<br>';
  }
?>

        
        
        
        
        
        
        
        
    
<!-- 
<div class="pagebg">
    <div style="display: inline-block; vertical-align: middle; margin-left: 5%;">
    <h1 style="font-family: times new roman, serif">BMW X3</h1>
    <h3 style="font-family: times new roman, serif; color: rgb(70, 68, 68);">Diesel</h3>
    <h3 style="font-family: times new roman, serif; font-weight: lighter;">Starting from ₹ 6,850,000</h3>
    </div>
    <div style="display: inline-block; vertical-align: middle; margin-left: 30%;">
    <img class="expand" src="../images/bmw/x3.jpg">
    </div> -->

</div>
    
</body>
</html>