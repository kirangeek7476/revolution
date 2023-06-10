// Array of different language translations
var translations = [
  "Change the World", // English
  "Cambiar el Mundo", // Spanish
  "Changer le Monde", // French
  "Verändere die Welt" // German
];

// Function to animate and update the text
function animateGlitchText() {
  var glitchText = document.querySelector(".glitch-text");
  var randomIndex = Math.floor(Math.random() * translations.length);
  glitchText.textContent = translations[randomIndex];
}

// Animate the text every 3 seconds
setInterval(animateGlitchText, 3000);
