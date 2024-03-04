const $btn = $(".openbtn");
const $menuScreen = $(".screen");


$menuScreen.hide();

$btn.click(function () {
    $(this).toggleClass('active');
});

$btn.on("click", function () {
    $menuScreen.toggleClass("fadein");

    if ($menuScreen.hasClass("fadein")) {
      $menuScreen.stop().fadeIn(500);
    } else {
      $menuScreen.stop().fadeOut(500);
    }

})

var openBtn = document.querySelector('.openbtn');

window.addEventListener('scroll', function() {
  if (window.scrollY > 850) {
    openBtn.classList.add('scrolled');
  } else {
    openBtn.classList.remove('scrolled');
  }
});




