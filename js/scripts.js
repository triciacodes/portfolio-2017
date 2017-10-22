// var projectImg = document.getElementsByClassName('img_project');

// function hoverStuff() {
//     for (var i = 0; i < projectImg.length; i++) {
//         console.log(projectImg[i]);
//     }
// }

// variable for overlay 
var parent = document.getElementsByClassName('project');
//var requiredDiv = document.getElementById('mainDiv').firstChild.firstChild.nextSibling;
// var child = parent.getElementsByTagName('div');

//var document.getElementsByClassName('project')[i].getElementsByTagName('div')[1];

//var whatevs = document.getElementById('project').getElementsByClassName('overlay');
//console.log(whatevs);

function showOverlay() {
    for (var i =0; i < imgOverlay.length; i++) {
        imgOverlay[i].classList.add('show');
        imgOverlay[i].classList.remove('hide');
    }
}

// for (var i = 0; i < imgProject.length; i++) {
//     imgProject[i].addEventListener('mouseover', showOverlay);
// }


//console.log(imgOverlay);

// hover over container div
// select the second div child underneath it
// add a class to that child
// take a class away from that child

// testingnnn