<?php get_header(); ?>
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

  <?php get_footer(); ?>
