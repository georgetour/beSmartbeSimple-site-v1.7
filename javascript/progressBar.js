$(document).ready(function () {

    //Starting functions with percentages for the progress bar
    progressBar('.seventyPercent',"70%");
    progressBar('.eightyPercent',"80%");
    progressBar('.eightyFivePercent',"85%");
    progressBar('.ninetyPercent',"90%");
    progressBar('.maxedSkill',"100%");

    //THe code that animates the progress bars in about page
    function progressBar(where,percentage) {
        $(where).animate({width: percentage}, {queue: false, duration: 2000});
    }

});


