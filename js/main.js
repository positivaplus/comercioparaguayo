$(document).ready(function() {
  $('.left').on('click', function(){
    $('.owl-prev').click();
  });
  $('.right').on('click', function(){
    $('.owl-next').click();
  });

  $('.goto-polizas').on('click', function(){
    window.location.href = "polizas.html";
  });
  $('.logo-toolbar').on('click', function(){
    window.location.href = "index.html";
  });

  $('.navTrigger').click(function(){
  $(this).toggleClass('active');
  $('.mobile-menu-container').toggleClass('visible');
  });

  //set date time to forms
  var d = new Date();
  var month = d.getMonth()+1;
  var day = d.getDate();
  var year = d.getFullYear();
  var output = ((''+day).length<2 ? '0' : '') + day + '/' +
               ((''+month).length<2 ? '0' : '') + month + '/' +
               year;
  $('.todaysdate').val(output);

  //enables fields from siniestros-modal
  $('.enablefields').change(function(){
    if ($(this).is(":checked")) {
      $(".fieldshidding").css('display','block');
    }else{
      $(".fieldshidding").css('display','none');
    }
  });

  //enables form's send btn
  $('.enablesend').change(function(){
    if ($(this).is(":checked")) {
      $(".btn-sendFormSiniestro").css('display','inline');
    }else{
      $(".btn-sendFormSiniestro").css('display','none');
    }
  });
});

//full res img
window.onload = function () {
  $(".big-img").each((i,object)=>{
    var imgUrl = './' + $(object).attr("src").replace('rsz_','');
     $(object).attr('src', imgUrl);
  });

  if ($('body').attr('id') == 'page-nosotros') {
    $(".full-width-img").css({
        "background-image" : "url(img/portada/portada-full-width.png)"
    });
  }
}














var elcomercioparaguayo = function () {
  // handle on page scroll
  var handleHeaderOnScroll = function() {
       if ($(window).scrollTop() > 300) {
        $('#coberturashometitle').removeClass('animation-only-desktop-hidding');
        $('#coberturashometitle').addClass('animated fadeIn');
      }
      if ($(window).scrollTop() > 1000) {
        $('#polizabounceleft').removeClass('animation-only-desktop-hidding');
        $('#polizabounceleft').addClass('animated bounceInLeft');
        $('#polizabounceright').removeClass('animation-only-desktop-hidding');
        $('#polizabounceright').addClass('animated bounceInRight');
      }
      if ($(window).scrollTop() > 1600) {
        $('#moreinfofadein').removeClass('animation-only-desktop-hidding');
        $('#moreinfofadein').addClass('animated fadeIn');
      }
      if ($(window).scrollTop() > 2000) {
        $('.grua-circle').addClass('animated tada');
      }
  }

  return {
      init: function () {
          handleHeaderOnScroll(); // initial setup for fixed header

          // handle minimized header on page scroll
          $(window).scroll(function() {
              handleHeaderOnScroll();
          });
      }
  };
}();

$(document).ready(function() {
    elcomercioparaguayo.init();

});
