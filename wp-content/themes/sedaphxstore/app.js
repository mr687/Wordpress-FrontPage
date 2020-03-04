$(document).ready(function() {

  new WOW().init();

  $('#pills-tab .nav-item').click(function() {
    $('#pills-tab .nav-item').removeClass('active')
    $(this).addClass('active')
  })

})