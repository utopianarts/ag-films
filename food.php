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

    <link rel="stylesheet" type="text/css" href="css/wedding.css">

    <style>
    body,h1 {font-family: "Montserrat", sans-serif}
    img {margin-bottom: -7px}
    .w3-row-padding img {margin-bottom: 12px}
    </style>

    <title>Food</title>
  </head>
  <body>
    <!-- Banner and Nav -->
    <div class="navBar">
      <div></div>
      <div class="title-container">
          <div class="title"><a href="index.php" style="text-decoration: none;"><h1>AMRIT GURUNG</h1></a></div>
      </div>
      <div class="navIcon-container">
        <div class="navIcon"><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span></div>
      </div>
    </div>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php">Motion</a>
        <a href="index.php#stills">Still</a>
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

    <!-- Photo Grid -->
    <div class="w3-row-padding" id="myGrid" style="margin-bottom:128px">
      <div class="w3-third">
        <img src="image/still/2_food/1.jpg" style="width:100%">
        <img src="image/still/2_food/4.jpg" style="width:100%">
        <img src="image/still/2_food/7.jpg" style="width:100%">
        <img src="image/still/2_food/10.jpg" style="width:100%">
      </div>

      <div class="w3-third">
        <img src="image/still/2_food/2.jpg" style="width:100%">
        <img src="image/still/2_food/5.jpg" style="width:100%">
        <img src="image/still/2_food/8.jpg" style="width:100%">
        <img src="image/still/2_food/11.jpg" style="width:100%">
      </div>

      <div class="w3-third">
        <img src="image/still/2_food/3.jpg" style="width:100%">
        <img src="image/still/2_food/6.jpg" style="width:100%">
        <img src="image/still/2_food/9.jpg" style="width:100%">
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
