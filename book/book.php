<?php
session_start();
require('../database.php');
$cname = $_GET['cn'];
$res = mysqli_query($con, "select * from carss where name='$cname'");

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
<?php
    while($row=mysqli_fetch_array($res)){
        echo '<div class="carbgl">';
        echo '<img src="'.$row['img'].'" height="430px">';
        echo '</div>';
        echo '<div class="carbgr">';
        echo '<div style="margin-left: 10%;">';
        echo '<h1>'.$row['name'].'</h1>';
        echo '<h3>Price: Rs.'.$row['price'].'</h3>';
        echo '<h3>Cars Available: '.$row['availcars'].'</h3>';
        echo '<a href="book1.php?cn='.$row['name'].'"><button>Book Now</button>';
        echo ' <br><br>';
        echo '</div>';
        echo '</div>';
    }
  ?>
    

        

    
    
        
            
            
            
            
           
        
    
</body>

</html>