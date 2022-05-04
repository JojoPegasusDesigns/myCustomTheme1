<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>MY PORTFOLIO HOME</title>
    <style>

    .page {
      background-image: url("images/mountainnight.jpg");
      background-size: cover;
      background-attachment: fixed;
    }

    #myNavBar ul {
     display: flex;
     padding: 0px;
    }
    #myNavBar li {
      list-style-type: none;
      display: inline-block;
      text-align: center;
      flex: 1;
      padding: 20px;
    }

     #myNavBar li:first-child a {
       color: white;
     }
     #myNavBar li:nth-child(2) a {
       color: white;
     }
     #myNavBar li:nth-child(3) a {
       color: white;
     }
     #myNavBar li:nth-child(4) a {
       color: white;
     }

     #myNavBar ul li:hover {
       background: black;
     }

     #myNavBar ul li:active {
      background: linear-gradient(to left, lightblue, darkblue, black);
    }
     #block {
       padding: 80px;
       text-align: center;
       font-size: 35px;
       color: white;
     }
     #p1 {
       text-align: center;
       color: white;
       font-size: 28px;
     }
     #imgContainer {
       display: flex;
       flex-wrap: wrap;
       justify-content: center;
     }
     #imgContainer {
       background-color: white;
       opacity: 90%;
     }
     img {
       height: 400px;
       padding: 30px;
     }
     #foot {
       color: lightblue;
       opacity: 70%;
       bottom: 0;
       width: 100vw;
       text-align: center;
       margin-top: 190px;
     }
     #p2 {
       text-align: center;
       color: white;
       font-size: 30px;
     }
     #p3 {
       text-align: center;
       color: white;
       font-size: 20px;
       margin-top: 70px;
     }
     #countdown {
       color: white;
       text-align: center;
       opacity: 80%;
     }

    </style>


  </head>
  <body class="page">
  <main>
    <nav id="myNavBar">
     <ul>
       <li><a href="index.html">Home</a></li>
       <li><a href="gallery.html">Gallery</a></li>
       <li><a href="aboutme.html">About Me</a></li>
       <li><a href="contact.html">Contact</a></li>
     </ul>
    </nav>
  </main>

    <div id="imgContainer" style="text-align: center;">
     <img
     src="images/Pegasus_Designs_logoPNG.png"
     alt="logo-design"
     >
    </div>

    <header id="block">
      Welcome to my Portfolio
    </header>
    <p id="p1">
    { Turning dreams and visions into reality }
    </p>

    <p id="p2">*CURRENTLY NOT ACCEPTING NEW CLIENTS*</p>

    <p id="p3">COUNTDOWN TO OPENING COMMISSION'S</p>

    <div id="placeholder">
    <h1 id="countdown">...</h1>
    </div>
    <div id="clock">
     <script type="text/javascript">
     let deadline = new Date('July 22, 2022 16:30:00');

     function setCountdown() {
       let now = new Date();

       let timeLeft = deadline.getTime() - now.getTime();

       let days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
       let hours = Math.floor(
         (timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
       );
       var minutes = Math.floor(
         (timeLeft % (1000 * 60 * 60)) / (1000 * 60)
       );
       var seconds = Math.floor(
         (timeLeft % (1000 * 60)) / 1000
       );

       document.getElementById('countdown').innerHTML =
       days + 'days' + hours + 'hours' + minutes + 'minutes' + seconds + 'seconds';
     }

      setInterval(setCountdown, 1000);

     </script>
    </div>

   <footer id="foot">
      Created in 2022 by Josie Sizemore. All rights reserved.
   </footer>


  </body>
</html>
