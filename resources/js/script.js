/* Aggiungi un event listener per catturare il click sui bottoni */
document.addEventListener("DOMContentLoaded", function() {
  var blueButton = document.getElementById("blue-theme");
  var greenButton = document.getElementById("green-theme");
  var redButton = document.getElementById("red-theme");
  var yellowButton = document.getElementById("yellow-theme");
  
  blueButton.addEventListener("click", function() {
    setTheme("blue");
  });
  
  greenButton.addEventListener("click", function() {
    setTheme("green");
  });
  
  redButton.addEventListener("click", function() {
    setTheme("red");
  });
  
  yellowButton.addEventListener("click", function() {
    setTheme("yellow");
  });

  // Controlla se il tema è già stato impostato in precedenza
  var theme = localStorage.getItem("theme");
  if (theme) {
    setTheme(theme);
  }
});

/* Definisci la funzione setTheme per cambiare il tema del sito */
function setTheme(themeName) {
  var body = document.querySelector("body");
  body.className = "";
  body.classList.add(themeName + "-theme");

  // Salva il tema selezionato dall'utente nel localStorage
  localStorage.setItem("theme", themeName);
}

// script del canvas in html5
const canvas = document.getElementById('myCanvas');
const ctx = canvas.getContext('2d');

// Esempio di disegno di un rettangolo rosso
ctx.fillStyle = 'red';
ctx.fillRect(50, 50, 200, 100);


// funzione del bottone stop animazione del h2 glow
// function stopGlowAnimation() {
//   var h2Element = document.querySelector('h2');
//   h2Element.classList.add('stop-glow');
// }



  $(function() {
    $('body').scrollspy({ target: '#navbar-example3' });
  });
