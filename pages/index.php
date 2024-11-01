<?php

require_once "../functions.php";

$section = explode("/", $_SERVER["PATH_INFO"])[1];

$next_prev = get_next_and_prev($section);

?>

<?php render_template("head", ["styles_url" => "../css/styles.css"]); ?>

<?php render_template("navbar"); ?>

<main class="container">
  <?php get_content($section); ?>

  <hr>
  <p>
    Si te sirvió este sitio, puedes apoyarme recomendando el proyecto en GitHub.
  </p>
</main>

<?php render_template("next_prev", ["next" => $next_prev["next"], "prev" => $next_prev["prev"]]); ?>