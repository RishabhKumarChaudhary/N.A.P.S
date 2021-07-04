var swiper = new Swiper('.blog-slider', {
  spaceBetween: 30,
  effect: 'fade',
  loop: true,
  mousewheel: {
    invert: false,
  },
  // autoHeight: true,
  pagination: {
    el: '.blog-slider__pagination',
    clickable: true,
  }
});
var animatedText = document.querySelectorAll(".animated-text");

function animate(element) {
  var textArray = element.innerText.split("");
  element.firstChild.remove();

  var elArray = textArray.map(
    (letter, index) => {
      if (letter == " ") letter = '&nbsp;';
      var el = document.createElement("span");
      el.className = "letter";
      el.innerHTML = letter;
      el.style.animationDelay = index / (textArray.length) + "s";
      element.appendChild(el);
      return el;
    }
  );
  element.innerHtml = elArray;
}

Array.from(animatedText).map(animate)