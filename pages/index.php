<?php

require_once "../functions.php";
require_once "../constants/pages.php";

$section = explode("/", $_SERVER["REQUEST_URI"]);

$show_content = false;
$next_prev = null;

$is_error = false;

if (sizeof($section) > 2 && exists_section($section[2])) {
  $show_content = true;
  $next_prev = get_next_and_prev($section[2]);
} else if (sizeof($section) > 2 && !exists_section($section[2])) {
  $is_error = true;
}

?>

<?php render_template("head", ["styles_url" => "../css/styles.css"]); ?>

<?php render_template("navbar"); ?>

<main class="container">
  <?php if ($show_content) get_content($section[2]); ?>

  <?php if (!$show_content && !$is_error) render_template("sections", ["pages" => $pages]) ?>

  <?php if ($is_error) render_template("error"); ?>
</main>

<?php if ($show_content) render_template("next_prev", ["next" => $next_prev["next"], "prev" => $next_prev["prev"]]); ?>