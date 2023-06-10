const slider = document.querySelector('.slider');
let slideIndex = 0;

document.addEventListener('keydown', (event) => {
  if (event.code === 'ArrowLeft') {
    slideIndex = Math.max(0, slideIndex - 1);
  } else if (event.code === 'ArrowRight') {
    slideIndex = Math.min(2, slideIndex + 1);
  }

  slider.style.transform = `translateX(-${slideIndex * 100}%)`;
});
