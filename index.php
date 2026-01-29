<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <title>Match up!</title>
</head>
<body>
  <div class="container">
    <div id="counter">0</div>
    <div id="board">
        <?php
            define('CARDS',16);
            for($i = 0; $i < CARDS; ++$i) { 
              echo '<div class="card" data-flipped="false"></div>';
          } 
        ?>
    </div>
  </div>
</body>
<!-- TODO: Play with script position -->
<script>
const cards = document.querySelectorAll('.card');

cards.forEach(card => {
  card.addEventListener('click', function () {
    const isFlipped = card.dataset.flipped === "true";
    card.dataset.flipped = isFlipped ? "false" : "true";
    card.style.backgroundImage = isFlipped 
      ? "url('assets/naipe.jpg')" 
      : "url('assets/heraclio.jpeg')";
  });
});

let seconds = 0;

const counterEl = document.getElementById('counter');

setInterval(() => {
  seconds++;
  counterEl.textContent = seconds;
}, 1000);

</script>

</html>
