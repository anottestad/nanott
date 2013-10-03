$(document).ready(function() {

    $('#info-open').click(function() {
        $('#information').slideDown();
        return false;
    });

    $('#info-close').click(function() {
        $('#information').slideUp();
        return false;
    });

    function preload(arrayOfImages) {
        $(arrayOfImages).each(function(){
            $('<img/>')[0].src = this;
        });
    }

    // Usage:

    preload([
        'images/smile-2b.jpg',
        'images/smile-2c.jpg',
        'images/smile-2d.jpg'
    ]);
   
   /*
    function showNext(){

    }

    var idleInterval = setInterval(showNext(), 5000); 

    //Zero the idle timer on mouse movement.
    $(this).mousemove(function (e) {
        clearInterval(idleInterval);
    });
    */

});