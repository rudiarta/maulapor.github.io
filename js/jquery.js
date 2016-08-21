
$(document).ready(function(){
  $(".navbar a, footer a[href='#maulapor']").on('click', function(event) {
  event.preventDefault();
  var hash = this.hash;

  $('html, body').animate({
    scrollTop: $(hash).offset().top
  }, 900, function(){

    window.location.hash = hash;
    });
  });
})


  $("#text_slider div:gt(0)").hide();

  setInterval(function(){
    $('#text_slider div:first')
    .fadeOut(500).next().fadeIn(1000).end().appendTo('#text_slider');
  }, 3000);
