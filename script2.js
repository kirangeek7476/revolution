const text = document.getElementById("typewriter-text");
const animationDuration = parseFloat(window.getComputedStyle(text).getPropertyValue("animation-duration")) * 1000;
const delay = 5000; // Delay in milliseconds (5 seconds)

function typeWriter() {
  text.style.animationPlayState = "running"; // Start the animation
  setTimeout(() => {
    text.style.animationPlayState = "paused"; // Pause the animation
    setTimeout(() => {
      text.style.animationPlayState = ""; // Resume the animation
      typeWriter(); // Call the function again to restart the animation
    }, delay); // Wait for the delay duration before resuming the animation
  }, animationDuration); // Wait for the animation duration before pausing
}

setInterval(typeWriter, animationDuration + delay); // Call the function to start the animation and delay for each iteration
