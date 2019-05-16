var navHeight = $('.navbar').outerHeight();
$('.home-page-header').css('margin-top', navHeight * -1);

if ($('.home-page-header').length) {
  $('.navbar').removeClass('navbar-bg');
}

function processFilledInput(input){
  if (input.val() != '') {
    input.addClass('filled');
  } else {
    input.removeClass('filled');
  }
}

$('.form-control').keyup(function(){
  processFilledInput($(this));
});

$('.form-control').each(function(){
  processFilledInput($(this));
});
