console.log("hello");



document.addEventListener('DOMContentLoaded', function() {




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







