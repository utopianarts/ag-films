<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Redressed&family=Teko&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/index.css">


    <title>Home</title>
  </head>
  <body>
    <!-- Banner and Nav -->
    <div class="navBar">
      <div></div>
      <div class="title-container">
          <div class="title"><h1>AMRIT GURUNG</h1></div>
      </div>
      <div class="navIcon-container">
        <div class="navIcon"><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span></div>
      </div>
    </div>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php">Motion</a>
        <a href="#stills">Still</a>
        <a href="contact.php">Info</a>
        <a href="contact.php#contact">Contact</a>
    </div>

    <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
    </script>


    <!-- Image Grid -->
    <div class="grid">
      <div class="grid-inner">

        <div class="item">
         <div class="item-inner">
           <img src="image/thumbnail/gb.jpg" alt="GBTB THUMBNAIL" class="image">
           <div class="middle">
             <a href="gbtb.php" style="text-decoration: none;"><h2>GURKHA: beneath the brabery</h2></a>
           </div>
         </div>
        </div>

        <div class="item">
         <div class="item-inner">
           <img src="image/thumbnail/BISTARAI_THUMBNAIL.jpg" alt="BISTARAI THUMBNAIL" class="image">
           <div class="middle">
              <a href="bistarai.php" style="text-decoration: none;"><h2>BISTARAI BISTARAI</h2></a>
           </div>
         </div>
        </div>

        <div class="item">
         <div class="item-inner">
           <img src="image/thumbnail/MAGNOLIA_THUMBNAIL.jpg" alt="MAGNOLIA THUMBNAI" class="image">
           <div class="middle">
             <a href="magnolia.php" style="text-decoration: none;"><h2>MAGNOLIA</h2></a>
           </div>
         </div>
        </div>

        <div class="item">
         <div class="item-inner">
           <img src="image/thumbnail/ALIVE_THUMBNAIL.jpg" alt="ALIVE THUMBNAIL" class="image">
           <div class="middle">
             <a href="alive.php" style="text-decoration: none;"><h2>ALIVE</h2></a>
           </div>
         </div>
        </div>

        <div class="item">
         <div class="item-inner">
           <img src="image/thumbnail/NATADPAU_THUMBNAIL.jpg" alt="NATADPAU THUMBNAIL" class="image">
           <div class="middle">
             <a href="natadpau.php" style="text-decoration: none;"><h2>NATADPAU</h2></a>
           </div>
         </div>
        </div>

        <div class="item">
         <div class="item-inner">
           <img src="image/thumbnail/RASHMINA_THUMBNAIL.jpg" alt="RASHMINA THUMBNAIL" class="image">
           <div class="middle">
             <a href="reshmina.php" style="text-decoration: none;"><h2>RASHMINA WEDS ABINASH</h2></a>
           </div>
         </div>
        </div>

        <div class="item">
         <div class="item-inner">
           <img src="image/thumbnail/IRO_CLAPHAM_THUMBNAIL.jpg" alt="IRO_CLAPHAM THUMBNAIL" class="image">
           <div class="middle">
             <a href="iroclapham.php" style="text-decoration: none;"><h2>IRO | CLAPHAM</h2></a>
           </div>
         </div>
        </div>

        <div class="item">
         <div class="item-inner">
           <img src="image/thumbnail/IRO_FULHAM_THUMBNAIL.jpg" alt="IRO_FULHAM THUMBNAIL" class="image">
           <div class="middle">
             <a href="irofulham.php" style="text-decoration: none;"><h2>IRO | FULHAM</h2></a>
           </div>
         </div>
        </div>

        <div class="item">
         <div class="item-inner"></div>
        </div>

      </div>
    </div>

    <!-- Stills -->
    <div class="stills-container">
      <div id="stills" class="still-title">
        <h2>STILLS</h2>
      </div>

      <div class="stills-frame">

        <div class="still">
          <div class="still-img">

            <img src="image/STILL/WEDDING_THUMBNAIL.jpg" alt="WEDDING" class="imageS"></img>
            <div class="still-text">
              <a href="wedding.php" style="text-decoration: none;"><h2>WEDDING</h2></a>
            </div>
          </div>
        </div>

        <div class="still">
          <div class="still-img">
            <img src="image/STILL/FOOD_THUMBNAIL.jpg" alt="FOOD" class="imageS"></img>
            <div class="still-text">
              <a href="food.php" style="text-decoration: none;"><h2>FOOD</h2></a>
            </div>
          </div>
        </div>

        <div class="still">
          <div class="still-img">
            <img src="image/STILL/EVENTS_THUMBNAIL.jpg" alt="EVENTS THUMBNAIL" class="imageS"></img>
            <div class="still-text">
              <a href="events.php" style="text-decoration: none;"><h2>EVENTS</h2></a>
            </div>
          </div>
        </div>

        <div class="still">
          <div class="still-img">

            <div class="still-text">

            </div>
          </div>
        </div>

      </div>

    </div>

    <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin-top:10px">
      <a href="https://www.facebook.com/AmritGurungPhotography" style="text-decoration: none;"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
      <a href="https://www.instagram.com/amritgurung7/?hl=en" style="text-decoration: none;"><i class="fa fa-instagram w3-hover-opacity"></i></a>
      <a href="https://www.youtube.com/channel/UCeJTqv3bk1cTtKQLzvcOqKw/videos" style="text-decoration: none;"><i class="fa fa-youtube w3-hover-opacity"></i><a/>
      <p class="w3-medium">@AmritGurungFilms</p>
    </footer>

  </body>
</html>
