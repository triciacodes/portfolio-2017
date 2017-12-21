<?php include('head.php');?>

<!-- - - - - - - - - - - - - - - - #HEADER - - - - - - - - - - - - - - - --> 

<div class="c-main page-index">

  <header class="c-header">
    <div class="header  header--left">
      <!-- <img src="img/patterns.png" width="400px" style="padding-right: 150px" alt="Geometric patterns"> -->
    </div>
    <div class="header  header--right">
      <p>Hi there! I'm Tricia Leach, a <span class="branding">developer</span> and <span class="branding">designer</span> in Portland, OR. As of December 2017, I'm a Portland State Graphic Design graduate (woo!). While studying at PSU, I revived an old passion for web development, and found a new love in creative coding. I'm currently compiling some of my Processing and web animation experiments to a <a href="http://tricia.codes">code sketchbook</a>.
    </div>
  </header>




    
  <main>

<!-- - - - - - - - - - - - - - - - #PROJECTS - - - - - - - - - - - - - - - -->
    <p style="position:relative;">
      <a id="page-projects" style="position:absolute; top:-40px;"></a>
    </p>

    <h2>Featured projects</h2>
    
    <div class="c-projects  box-flex">

      <!-- start fresh website project -->
      <div class="project__block  box-lrg  marg-r  project--overlay"> 
        <a href="/projects/fresh-website.php"><img id="fresh-website-img" src="img/projects/fresh-website.jpg" alt="Macbook image of website called Fresh" class="img-project"></a>
      </div> <!-- end fresh website project -->

      <!-- start mars project -->
      <div class="project__block  box-sml  marg-l  project--overlay"> 
        <a href="/projects/mars.php"><img id="mars-img" src="img/projects/mars.jpg" alt="Mars travel poster" class="img-project"></a>
      </div> <!-- end mars project -->

      <!-- start Be Honest project -->
      <div class="project__block  box-full  project--overlay"> 
        <a href="/projects/be-honest.php"><img id="be-honest-img" src="img/projects/be-honest.jpg" alt="Be Honest promo" class="img-project"></a>
      </div> <!-- end Be Honest project -->


      <div class="project__block  box-lrg  marg-r"> <!-- Combined FoGD/Creative Coding projects -->

        <!-- start FoGD project -->
        <div class="project-container-inner  project--overlay  project__block--margin-b"> 
          <a href="/projects/fogd-website.php"><img id="fogd-website-img" src="img/projects/fogd-website.jpg" alt="Friends of Graphic Design website"></a>
        </div> <!-- end FoGD project -->


        <!-- start c. coding project -->
        <div class="project-container-inner  project--overlay"> 
          <a href="/projects/arduino-lightchimes.php"><img id="arduino-lightchimes-img" src="img/projects/arduino-lightchimes.jpg" alt="Multi-colored tubes with lights inside"></a>
        </div> <!-- end c. coding project -->

      </div> <!-- end FoGD/Creative Coding projects -->


      <!-- start time travel project -->
      <div class="project__block  box-sml marg-l  project--overlay"> 
          <a href="/projects/time-travel-app.php"><img id="time-travel-app-img" src="img/projects/time-travel-app.jpg" alt="Time travel app mockup"></a>
      </div> <!-- end time travel project -->


    </div> <!-- end projects container -->





<!-- - - - - - - - - - - - - - - - #ABOUT - - - - - - - - - - - - - - - -->

    <p style="position:relative;">
        <a id="page-about" style="position:absolute; top:-40px;"></a>
    </p>

    <h2>A little about me</h2>
    <div class="c-about  box-flex">

      <div class="box-half  marg-r">
        <!-- <h3>Obligatory third person bio</h3> -->
        <p>I'm happiest working somewhere in the middle of design, art, craft, and technology. I love digging into the details of code to build engaging and delightful experiences, both for the web and the physical world. My secret weapons are my enthusiasm for community building, and a well-crafted spreadsheet.</p>
        <!-- <p>I have eight years of financial analysis/project management experience preceeding my years at Portland State. During that time I acquired many skills (<a href="/assets/tricia-leach-resume-dec-2017-web.pdf">pdf resume</a>) that complement the work I've been doing with programming. So while I may be looking for a junior dev position, I'll be bringing over a decade of professional experience with me, as well as a keen eye for design. -->
        </p>
        <h3>I'd love to hear from you</h3>
        <p>Say hello at <a href="mailto:hi@tricialea.ch">hi@tricialea.ch</a>. I'd love to help PSU students who are interested in learning how to code &mdash; contact me for resources or with questions!
        </p>
      </div>

      <div class="box-half  marg-l  box-flex">

        <div class="about-portrait">
          <img src="img/tricialeach_portrait.jpg" style="display: inline-block;" alt="Geometric patterns">
        </div>
        <div class="about-interests">
        <h3>Some of my interests</h3>
          <ul>
            <li>Front-End Development</li>
            <li>Creative Coding</li>
            <li>Web Animation</li>
            <li>Web Typography</li>
            <li>Interactive Design</li>
            <li>Pattern Design</li>
          </ul>
        </div>
        
      </div>

    </div> <!-- end c-about -->


<!-- - - - - - - - - - - - - - - - #END - - - - - - - - - - - - - - - -->

  </main>

</div> <!-- end c-main container // header and main content -->

<?php include('footer.php');?>