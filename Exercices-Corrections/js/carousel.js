// Version en jQuery 
/*
playButton = $(".btn-play");
pauseButton = $(".btn-pause");
carouselID = playButton.attr("carousel");

playButton.click(function() {
    pauseButton.show();
    playButton.hide();
    $(carouselID).carousel('cycle');
});

pauseButton.click(function() {
    playButton.show();
    pauseButton.hide();
    $(carouselID).carousel('pause');
});
*/

// Le même code en pur js sans jQuery sauf pour mettre en pause/redémarrer le caroussel
playButton = document.querySelector(".btn-play");
pauseButton = document.querySelector(".btn-pause");
carouselID = playButton.getAttribute("carousel")

playButton.addEventListener('click', function() {
    pauseButton.style.display = 'block';
    playButton.style.display = 'none';
    $(carouselID).carousel('cycle'); //jQuery
}, false);

pauseButton.addEventListener('click', function() {
    playButton.style.display = 'block';
    pauseButton.style.display = 'none';
    $(carouselID).carousel('pause'); //jQuery
}, false);