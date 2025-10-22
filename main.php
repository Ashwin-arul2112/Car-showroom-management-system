<!DOCTYPE html>
<html>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <head>
    <title>Main</title>
    <link rel="stylesheet" href="stylehome.css" />
  </head>
  <body class="bgshowroom">
    <div class="colour">
      <center>
        <div class="gallery-container">
          <div class="image-gallery">
            <img src="images/homepage/nav1.jpg" alt="Image 1" />
            <img src="images/homepage/nav2.jpg" alt="Image 2" />
            <img src="images/homepage/nav3.png" alt="Image 3" />
            <img src="images/homepage/nav4.jpg" alt="Image 4" />
            <img src="images/homepage/nav5.jpg" alt="Image 5" />
          </div>
        </div>
      </center>
    </div>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const gallery = document.querySelector(".image-gallery");
        const images = gallery.querySelectorAll("img");
        let currentIndex = 0;

        function showNextImage() {
          currentIndex = (currentIndex + 1) % images.length;
          gallery.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        setInterval(showNextImage, 3000); // Change image every 3 seconds
      });
    </script>

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
        </b></font
      >
    </nav>
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <div class="white" style="margin-left: 10%; margin-right: 15%">
      <h1 style="font-size: xxx-large; font-family: Didot">
        Welcome to NFS Motors
      </h1>
      <p style="font-size: xx-large; font-family: Didot; line-height: 170%">
        Welcome to NFS Motors, where automotive excellence meets luxury. Our
        showroom, set in an opulent, modern space, showcases the finest
        collection of high-end vehicles. From sleek sports cars to sophisticated
        sedans, each model is displayed with meticulous attention to detail,
        highlighting its unique craftsmanship and advanced technology. Our
        dedicated team offers personalized service, ensuring an exceptional
        buying experience tailored to your discerning tastes. At NFS Motors, we
        redefine luxury, offering not just cars, but a lifestyle.
      </p>
    </div>
    <br /><br /><br /><br />
    <div class="brandsel">


      <h1 style="font-family: Copperplate">Explore Luxury Cars by Brands</h1>


      <br />


      <a href="eyes/audi.php">
        <button class="brandselbtn">
          <img src="images/logo/audi.png" style="width: 80%" />
          <h2 style="font-family: Didot">Audi</h2>
        </button>
      </a>


      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


      <a href="eyes/bmw.php">
        <button class="brandselbtn">
          <img src="images/logo/bmw.png" style="width: 50%; margin-top: 20px" />
          <h2 style="font-family: Didot">BMW</h2>
        </button>
      </a>


      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      <a href="eyes/benz.php">
        <button class="brandselbtn">
          <img src="images/logo/benz.png" style="width: 50%; margin-top: 20px" />
          <h2 style="font-family: Didot">Benz</h2>
        </button>
      </a>
      


      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


      <a href="eyes/porsche.php">
        <button class="brandselbtn">
          <img src="images/logo/porsche.png" style="width: 80%; margin-top: 26px"  />
          <h2 style="font-family: Didot">Porsche</h2>
        </button>
      </a>


      <br /><br /><br />


      <a href="eyes/rr.php">
        <button class="brandselbtn">
          <img src="images/logo/rr.png" style="width: 50%; margin-top: 20px" />
          <h2 style="font-family: Didot">Rolls Royce</h2>
        </button>
      </a>


      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


      <a href="eyes/jaguar.php">
        <button class="brandselbtn">
          <img src="images/logo/jaguar.png" style="width: 60%; margin-top: 29px" />
          <h2 style="font-family: Didot">Jaguar</h2>
        </button>
      </a>


      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


      <a href="eyes/lambo.php">
        <button class="brandselbtn">
          <img src="images/logo/lamborghini.png" style="width: 40%; margin-top: 29px" />
          <h2 style="font-family: Didot">Lamborghini</h2>
        </button>
      </a>


      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


      <a href="eyes/ferrari.php">
        <button class="brandselbtn">
          <img src="images/logo/ferrari.png" style="width: 60%; margin-top: 29px" />
          <h2 style="font-family: Didot">Ferrari</h2>
        </button>
      </a>


      <br /><br /><br />
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="insur">
      <br><br><br><br><br><br><br>

      <div style=" width:49%; display: inline-block; text-align: center;">
        <h1 style="font-family: times new roman, serif">Car Warranty</h1>
        <img src="images/homepage/warr.png" width="48%">
        <h4 style="font-family: times new roman, serif; font-weight: lighter;">Now Buy Warranty and Get Complete Peace of Mind</h4>
        <button class="insursel">
        <h2 style="font-family: times new roman, serif">Know more details</h2>
        </button>
      </div>

      <div style="width:49%; display: inline-block; text-align: center; ">
        <h1 style="font-family: times new roman, serif">Car Insurance</h1>
        <img src="images/homepage/insura.png" width="40%">
        <h4 style="font-family: times new roman, serif; font-weight: lighter;">Buy Best Insurance Policy for your Luxury Car</h4>
        <button class="insursel">
        <h2 style="font-family: times new roman, serif">Know more details</h2>
        </button>
      </div>



      <br><br><br><br><br><br><br>


      <footer class="foot">
        <br><br><br><br><br><br><br><br><br><br>
        <a href="admin.php"><button class="alog">Admin Login</button></a>
      </footer>
    </div>

    
  </body>
</html>
