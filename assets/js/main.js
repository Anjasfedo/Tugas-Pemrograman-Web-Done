// SmothScroll
const links = document.querySelectorAll('a[href^="#"]');

function smoothScroll(target) {
  const destination = document.querySelector(target);
  const startPosition = window.pageYOffset;
  const targetPosition = destination.offsetTop;
  const distance = targetPosition - startPosition;
  const duration = 1000;
  let start = null;

  function step(timestamp) {
    if (!start) start = timestamp;
    const progress = timestamp - start;
    window.scrollTo(0, easeInOutCubic(progress, startPosition, distance, duration));
    if (progress < duration) {
      window.requestAnimationFrame(step);
    }
  }

  function easeInOutCubic(t, b, c, d) {
    t /= d / 2;
    if (t < 1) return c / 2 * t * t * t + b;
    t -= 2;
    return c / 2 * (t * t * t + 2) + b;
  }

  window.requestAnimationFrame(step);
}

links.forEach(link => {
  link.addEventListener('click', (e) => {
    e.preventDefault();
    const target = link.getAttribute('href');
    smoothScroll(target);
  });
});

// progress scroll

let calcScrollValue = () => {
  let scrollProgress = document.getElementById("progress");
  let progressValue = document.getElementById("progress-value");
  let pos = document.documentElement.scrollTop;
  let calcHeight =
    document.documentElement.scrollHeight -
    document.documentElement.clientHeight;
  let scrollValue = Math.round((pos * 100) / calcHeight);
  if (pos > 100) {
    scrollProgress.style.display = "grid";
  } else {
    scrollProgress.style.display = "none";
  }
  scrollProgress.addEventListener("click", () => {
    document.documentElement.scrollTop = 0;
  });
  scrollProgress.style.background = `conic-gradient(#FA16E3 ${scrollValue}%, #d7d7d7 ${scrollValue}%)`;
};

window.onscroll = calcScrollValue;
window.onload = calcScrollValue;

// scroll reveal

function revealFunction() {
  window.sr = ScrollReveal({ duration: 1350, distance: '250px', easing: 'ease-out' });

  sr.reveal('.image__feature', { origin: 'left', reset: true });
  sr.reveal('.header__image', { origin: 'top', reset: true });
  sr.reveal('.header__content', { origin: 'right', reset: true });
  sr.reveal('.premium__grid', { origin: 'bottom', reset: true });
  sr.reveal('.feature__content', { origin: 'right', reset: true });
  sr.reveal('.header__title', { origin: 'left', reset: true });
  sr.reveal('.header__subtitle', { origin: 'right', reset: true });
  sr.reveal('.preview__grid', { origin: 'top', reset: true });
  sr.reveal('.feature__list', { origin: 'bottom', rotate: { x:1000, z:1000 }, reset: true });
  sr.reveal('.faq__title', { origin: 'left', reset: true });
  sr.reveal('.faq__subtitle', { origin: 'right', reset: true });
  sr.reveal('.form__group', { origin: 'left', reset: true });
  sr.reveal('.about-us__image', { origin: 'bottom', rotate: { x:1000, z:1000 }, reset: true });
  sr.reveal('.member1', { origin: 'left', reset: true });
  sr.reveal('.member4', { origin: 'left', reset: true });
  sr.reveal('.member3', { origin: 'right', reset: true });
  sr.reveal('.member6', { origin: 'right', reset: true });
  sr.reveal('.member2', { origin: 'top', reset: true });
  sr.reveal('.member5', { origin: 'bottom', reset: true });


}

window.addEventListener('load', function () {
  revealFunction();
});


// load scroll

window.addEventListener("load", function() {
  window.scrollTo(0, 0);
});


