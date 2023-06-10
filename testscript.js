var navbar = document.getElementById('nb');
var nbl = document.getElementById('nbl');
window.onscroll=function(){
  if(window.pageYOffset >= nbl.offsetTop){
    navbar.classList.add("sticky");
  }
  else{
    navbar.classList.remove('"sticky');
  }
}
  //scrolling animation

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting)
      {
        entry.target.classList.add('show');
      }
      else
      {
        entry.target.classList.remove('show');
      }
    });
  });
  const hiddenelements = document.querySelectorAll('.hidden');
  hiddenelements.forEach((el) => observer.observe(el));

  const observer1 = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting)
      {
        entry.target.classList.add('show1');
      }
      else
      {
        entry.target.classList.remove('show1');
      }
    });
  });
  const hiddenelements1 = document.querySelectorAll('.hidden1');
  hiddenelements1.forEach((el) => observer1.observe(el));

// Function to display the slides
let slideIndex = 1;
showSlides(slideIndex);

function showSlides(n) {
    const slides = Array.from(document.getElementsByClassName("slide"));
    const indicators = Array.from(document.getElementsByClassName("indicator"));
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (let i = 0; i < indicators.length; i++) {
        indicators[i].className = indicators[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    indicators[slideIndex - 1].className += " active";
}

// Function to change slide on left or right arrow click
function changeSlide(n) {
    showSlides(slideIndex += n);
}

// Function to change slide on indicator click
function currentSlide(n) {
    showSlides(slideIndex = n);
}

// Automatic slide show every 3 seconds
setInterval(() => {
    changeSlide(1);
}, 3000);

// Set the progress percentage (0-100)
// Set the progress percentage (0-100)
function animateProgressBar() {
    var progressBarFill = document.getElementById('progress-bar-fill');
    progressBarFill.style.width = '100%';
  
    setTimeout(function() {
      progressBarFill.style.width = '0';
      animateProgressBar();
    }, 5000); // Change the duration of the animation as needed (in milliseconds)
  }
  
  animateProgressBar();

  //Slider images JS
  const slider = document.querySelector('.slider');
  const sliderItems = document.querySelectorAll('.slider-item');
  const sliderItemCount = sliderItems.length;
  const sliderItemWidth = sliderItems[0].offsetWidth;
  const sliderDuration = 3000; // 3 seconds
  
  let currentIndex = 0;
  
  function slideToNext() {
    currentIndex = (currentIndex + 1) % sliderItemCount;
    slider.style.transform = `translateX(-${currentIndex * sliderItemWidth}px)`;
  }
  
  setInterval(slideToNext, sliderDuration);

// Get the dropdown button and content
var dropdownBtn = document.querySelector(".dropbtn");
var dropdownContent = document.querySelector(".dropdown-content");

// Toggle the dropdown content on click
dropdownBtn.addEventListener("click", function() {
  dropdownContent.classList.toggle("show");
});

// Close the dropdown content if the user clicks outside of it
window.addEventListener("click", function(event) {
  if (!event.target.matches(".dropbtn") && !event.target.matches(".dropdown-content a")) {
    if (dropdownContent.classList.contains("show")) {
      dropdownContent.classList.remove("show");
    }
  }
});
