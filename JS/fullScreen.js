console.log("hello");

// let cv = document.querySelector('#cv');
// console.log(cv);


// function openFullscreen() {
//     if (cv.requestFullscreen) {
//     cv.requestFullscreen();
//   } else if (cv.webkitRequestFullscreen) { /* Safari */
//     cv.webkitRequestFullscreen();
//   } else if (cv.msRequestFullscreen) { /* IE11 */
//     cv.msRequestFullscreen();
//   }
// }

// cv.addEventListener('click', event => {
//     openFullscreen();
// });

document.addEventListener('DOMContentLoaded', function() {
    // Votre code JavaScript ici
  



const cv = document.querySelector('.cv')

const fullscreen = () => {
    if (document.fullscreenElement){
        document.exitFullscreen();
    }
    
    else{
        cv.requestFullscreen()
    }
}

cv.addEventListener('click', fullscreen);

});







