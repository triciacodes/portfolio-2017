<?php include('head.php');?>

<!-- - - - - - - - - - - - - - - - #HEADER - - - - - - - - - - - - - - - --> 

<div class="c-main page-index">

  <header class="c-header  header--index">
    <div class="header  header--left">
      <!-- <img src="img/patterns.png" width="400px" style="padding-right: 150px" alt="Geometric patterns"> -->
    </div>
    <div class="header  header--right">
      <p>Hi there! I'm Tricia Leach, a <span class="branding">developer</span> and <span class="branding">designer</span> in Portland, OR. I'm currently seeking a full-time front-end developer role within a stellar team. Could this be you?</p>
      <p>ps — Here's a little more <a href="about/">about me.</a></p>
    </div>
  </header>



<!-- - - - - - - - - - - - - - - - #PROJECTS - - - - - - - - - - - - - - - -->
    
  <main>

    <h2>Featured Projects</h2>

    <div class="c-projects">

    
      <div class="project__block  project--overlay  project__block--margin-r"> <!-- start fresh website project -->
        <a href="/projects/fresh-website.php"><img id="fresh-website-img" src="img/projects/fresh-website.jpg" alt="Macbook image of website called Fresh" class="img-project"></a>
      </div> <!-- end fresh website project -->


      <div class="project__block  project--overlay  project__block--margin-l"> <!-- start mars project -->
        <a href="/projects/mars.php"><img id="mars-img" src="img/projects/mars.jpg" alt="Mars travel poster" class="img-project"></a>
      </div> <!-- end mars project -->


      <div class="project__block  project--overlay"> <!-- start Be Honest project -->
        <a href="/projects/be-honest.php"><img id="be-honest-img" src="img/projects/be-honest.jpg" alt="Be Honest promo" class="img-project"></a>
      </div> <!-- end Be Honest project -->


      <div class="project__block  project__block--margin-r"> <!-- Combined FoGD/Creative Coding projects -->

        <div class="project-container-inner  project--overlay  project__block--margin-b"> <!-- start FoGD project -->
          <a href="/projects/fogd-website.php"><img id="fogd-website-img" src="img/projects/fogd-website.jpg" alt="Friends of Graphic Design website"></a>
        </div> <!-- end FoGD project -->


        <div class="project-container-inner  project--overlay"> <!-- start c. coding project -->
          <a href="/projects/arduino-lightchimes.php"><img id="arduino-lightchimes-img" src="img/projects/arduino-lightchimes.jpg" alt="Multi-colored tubes with lights inside"></a>
        </div> <!-- end c. coding project -->

      </div> <!-- end FoGD/Creative Coding projects -->


      <div class="project__block  project__block--margin-l"> <!-- start time travel project -->
        <div class="project-container-inner  project--overlay">
          <a href="/projects/time-travel-app.php"><img id="time-travel-app-img" src="img/projects/time-travel-app.jpg" alt="Time travel app mockup"></a>
      </div> <!-- end time travel project -->

    </div> <!-- end projects container -->

  </main>

</div> <!-- end c-main container // header and main content -->

<?php include('footer.php');?>