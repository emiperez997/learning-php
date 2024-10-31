<?php

require_once "constants/pages.php";
require_once "functions.php";

?>

<?php render_template("head", ["styles_url" => "./css/styles.css"]); ?>

<?php render_template("navbar"); ?>

<section class="banner pico-background-azure-800">
  <img width="250" src="./img/php-logo.svg" alt="">
  <p>
    En esta pagina aprenderas los conceptos de PHP <br />
    Desde lo basico hasta donde lleguemos.
  </p>

  <a href="pages/introduction.php">
    <button>
      Empezar
    </button>
  </a>
</section>

<main class="container">
  <section>
    <h2>
      Secciones disponibles
    </h2>

    <aside>
      <?php foreach ($pages as $page) : ?>
        <article>
          <h3 class="uppercase">
            <?= $page["title"] ?>
          </h3>
          <p>
            <?= $page["description"] ?>
          </p>
          <a href="pages/<?= $page["url"] ?>">
            <button>
              Ver sección
            </button>
          </a>
        </article>
      <?php endforeach; ?>
    </aside>
  </section>
</main>