<?php

require_once "functions.php";
require_once "constants/pages.php";

?>

<?php render_template("head", ["styles_url" => "./css/styles.css"]); ?>

<?php render_template("navbar"); ?>

<section class="banner pico-background-azure-800">
  <img width="250" src="./img/php-logo.svg" alt="">
  <p>
    ¿Quieres aprender PHP desde cero? <br />
    Estás en el lugar correcto 💪🏽
  </p>

  <a href="pages/introduction">
    <button>
      Empieza aqui
    </button>
  </a>
</section>

<main class="container">
  <?php render_template("sections", ["pages" => $pages]) ?>
</main>