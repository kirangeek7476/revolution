const navslide = ()=>{
  const burger=document.querySelector('.burger');
  const nav = document.querySelector('.nav-links');
  const navLinks = document.querySelectorAll('.nav-links li');
  //toggle
  burger.addEventListener('click',()=>{
    nav.classList.toggle('nav-active');
    navLinks.forEach((link,index) => {
      if(link.style.animation){
        link.style.animation='';
      }
      else{
        link.style.animation = link.style.animation = `navLinkFade 0.5s ease forwards ${index/7 +0.5}s`;
      }
    }); 
    burger.classList.toggle('toggle');
  });
}
navslide();

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function dropdown() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
const text = document.getElementById("typewriter-text");
const delay = 5000; // Delay in milliseconds (5 seconds)

function typeWriter() {
  text.style.animationPlayState = "running"; // Start the animation
  setTimeout(() => {
    text.style.animationPlayState = "paused"; // Pause the animation
    setTimeout(() => {
      text.style.animationPlayState = ""; // Resume the animation
      typeWriter(); // Call the function again to restart the animation
    }, delay); // Wait for the delay duration before resuming the animation
  }, text.style.animationDuration.replace("s", "") * 1000); // Wait for the animation duration before pausing
}

typeWriter(); // Call the function to start the animation

