$(document).ready(function (){
  /* NAVIGATION
  =============================== */
  $(document).scroll(function () {
    var s = $(document).scrollTop();
    $("#intro header").css("-webkit-transform","translateY(" +  (s/4)  + "px)");
  });

  $('#navigation').scrollspy({
    offset: 300
  });

  $('#navigation a').smoothScroll({
    offset: 0,
    speed: 700
  });


  /* GALLERY
  =============================== */

  // Open description
  $('.thumbnails .box .link').click(function() {
    var piece = $(this).data('piece');
    $('#selection').slideToggle();
    $('.description').children('#'+piece).toggle();
    $('#preview-image').attr('src', 'images/work-'+piece+'.jpg');
  });

  // Left & Right arrows
  $('.control.pull-left').click(function() {
    var current = $('.description').children('.content:visible');
    current.prev('.content').length ? current.prev('.content').fadeToggle() : current.parent().children('.content:last').fadeToggle();

    current.toggle();

    var piece = $('.description').children('.content:visible').attr('id');
    $('#preview-image').attr('src', 'images/work-'+piece+'.jpg');
  });

  $('.control.pull-right').click(function() {
    var current = $('.description').children('.content:visible');
    current.next('.content').length ? current.next('.content').fadeToggle() : current.parent().children('.content:first').fadeToggle();

    current.toggle();

    var piece = $('.description').children('.content:visible').attr('id');
    $('#preview-image').attr('src', 'images/work-'+piece+'.jpg');
  });

  // Close description
  $('.close').click(function() {
    $('.description').children('.content:visible').toggle();
    $('#selection').slideToggle();
  });


  /* CONTACT
  =============================== */

  $('#submit').click(function() {

    // Check if 'email' is blank
    var email = $("input#email").val();  
    if (email == "") {  
      $("#email_err").show();  
      $("input#email").focus();  
      return false;  
    }  

    // Check if 'comment' is blank
    var comment = $("input#comment").val();  
    if (comment == "") {  
      $("#comment_err").show();  
      $("input#comment").focus();  
      return false;  
    }  

    // Process submission
    var dataString = 'comment='+ comment + '&email=' + email;  
    //alert (dataString);return false;  
    $.ajax({  
      type: "POST",  
      url: "cgi-bin/contact.php",  
      data: dataString,  
      success: function() {  
        $('#contact_form').hide(); 
        $('#success').show(); 
      }  
    });  
    return false;

  });

  // Hide errors 
  $("input#comment").change(function() {
    $("#comment_err").hide();  
  });

  $("input#email").change(function() {
    $("#email_err").hide();  
  });

});
