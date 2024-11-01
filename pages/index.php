<?php

require_once "../functions.php";

$section = explode("/", $_SERVER["PATH_INFO"])[1];

$next_prev = get_next_and_prev($section);

?>

<?php render_template("head", ["styles_url" => "../css/styles.css"]); ?>

<?php render_template("navbar"); ?>

<main class="container">
  <?php echo get_content($section); ?>
</main>

<footer class="container">
  <?php render_template("next_prev", ["next" => $next_prev["next"], "prev" => $next_prev["prev"]]); ?>
</footer>