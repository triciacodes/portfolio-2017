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
  var nav = document.querySelectorAll("#nav-links, #c-social--nav");
  var footer = document.getElementById('c-footer');

  var scrollHeight = window.scrollY + window.innerHeight;
  var topOfFooter = document.body.offsetHeight - footer.offsetHeight;

  if (scrollHeight > topOfFooter) {
    for (i = 0; i < nav.length; i++) {
      nav[i].classList.add('js-fade-out');
      nav[i].classList.remove('js-fade-in');
    }
  } else if (scrollHeight < topOfFooter) {
    for (i = 0; i < nav.length; i++) {
      if (nav[i].classList.contains('js-fade-out')) {
        nav[i].classList.remove('js-fade-out');
        nav[i].classList.add('js-fade-in');
      }
    }
  }
};

window.addEventListener('scroll', hideNav);