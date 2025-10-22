<!DOCTYPE html>
<head>
  <title>
    Login
  </title>
  <link rel="stylesheet" href="styles.css">
</head>
<body class="body">
  <br><br><br><br><br><br><br><br><br><br><br><br><br>
  <audio id="hell" volume="0.0" autoplay>
    <source src="audio/hellcatengine.mp3" type="audio/mp3">
  </audio>
  <script>
    document.addEventListener("DOMContentLoaded",function(){
      var audio=document.getElementById("hell");
      audio.addEventListener("ended",function(){
        window.location.href="user_login.php";
      });
    });
    </script>
  <div class="imgcontainer zoomlogo">
    <div class="rotatelogo">
    <img class="img shakelogo " src="images/logo.png"/>
  </div>
</div>
</body>
</html>

