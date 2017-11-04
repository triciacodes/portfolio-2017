// var projectImg = document.getElementsByClassName('img_project');

// function hoverStuff() {
//     for (var i = 0; i < projectImg.length; i++) {
//         console.log(projectImg[i]);
//     }
// }

// variable for overlay 
//var parent = document.getElementsByClassName('project');
//var requiredDiv = document.getElementById('mainDiv').firstChild.firstChild.nextSibling;
// var child = parent.getElementsByTagName('div');

//var document.getElementsByClassName('project')[i].getElementsByTagName('div')[1];

//var whatevs = document.getElementById('project').getElementsByClassName('overlay');
//console.log(whatevs);

// function showOverlay() {
//     for (var i =0; i < imgOverlay.length; i++) {
//         imgOverlay[i].classList.add('show');
//         imgOverlay[i].classList.remove('hide');
//     }
// }




// when user scrolls to just above the footer, 
// add a css animation to fade out (js-fade-out)
// when user scrolls back up page, remove js-fade-out
// and add js-fade-in class

function hideNav() {

  var navLinks = document.getElementById('nav-links');
  var navSocial = document.getElementById('c-social--nav');
  var footer = document.getElementById('c-footer');

  var screenHeight = window.innerHeight;
  var scrollYPosition = window.scrollY;
  var docHeight = document.body.offsetHeight;
  var footerHeight = footer.offsetHeight; 

  if ((scrollYPosition + screenHeight) > (docHeight - footerHeight)) {
    navLinks.classList.add('js-fade-out');
    navSocial.classList.add('js-fade-out');
  } else if ((scrollYPosition + screenHeight) < (docHeight - footerHeight)) {
    if (navLinks.classList.contains('js-fade-out')) {
      navLinks.classList.remove('js-fade-out');
      navLinks.classList.add('js-fade-in');
    }
  }
};

window.addEventListener('scroll', hideNav);