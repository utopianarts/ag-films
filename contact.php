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

    <link rel="stylesheet" type="text/css" href="css/contact.css">


    <title>Info & Contact</title>
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

    <div class="contact-container">
      <div class="contect-inner">
        <div class="profile">
          <img src="image/info/amrit_gurung.jpg" alt="Amrit Gurung"></img>
        </div>
        <div class="info">
          <h2>Amrit Gurung</h2>
          <p>Amrit Gurung is a Nepalese born
            cinematograoher residing in the
            UK. He used to sketch and paint
            in his childhood later developed
             love for photography. He has
             worked as a camerman in
             documentries and also created
             music videos for various artists.
              Amrit has worked as a DP in latest
              feature film called
            GURKHA: beneath the bravery.</p>
            <h2 id="contact">contact</h2>
        </div>

      </div>

    </div>

    <div class="container2">
    <form method="POST" class="contact-form">
      <label for="fname">First Name</label>
      <input type="text" class="fname" name="firstname" placeholder="Your name..">

      <label for="lname">Last Name</label>
      <input type="text" class="lname" name="lastname" placeholder="Your last name..">

      <label for="phone">Contact Number</label>
      <input type="text" class="phone" name="phone" placeholder="044 7969 358148...">

      <label for="email">Email</label>
      <input type="email" class="email" name="lastname" placeholder="Your email..">

      <label for="subject">Subject</label>
      <textarea class="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

      <input type="submit"></input>
    </form>
    </div>


    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="app.js"></script>

    <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin-top:10px">
      <a href="https://www.facebook.com/AmritGurungPhotography" style="text-decoration: none;"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
      <a href="https://www.instagram.com/amritgurung7/?hl=en" style="text-decoration: none;"><i class="fa fa-instagram w3-hover-opacity"></i></a>
      <a href="https://www.youtube.com/channel/UCeJTqv3bk1cTtKQLzvcOqKw/videos" style="text-decoration: none;"><i class="fa fa-youtube w3-hover-opacity"></i><a/>
      <p class="w3-medium">@AmritGurungFilms</p>
    </footer>

  </body>
</html>
