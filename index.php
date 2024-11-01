<?php

require_once "constants/pages.php";
require_once "functions.php";

?>

<?php render_template("head", ["styles_url" => "./css/styles.css"]); ?>

<?php render_template("navbar"); ?>

<section class="banner pico-background-azure-800">
  <img width="250" src="./img/php-logo.svg" alt="">
  <p>
    En esta página podrás aprender PHP desde cero.
  </p>

  <a href="pages/introduction">
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