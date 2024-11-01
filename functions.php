<?php

declare(strict_types=1);

require_once "constants/pages.php";

function render_template(string $template, array $data = [])
{
  extract($data);
  require "templates/$template.php";
}

function get_content(string $slug)
{
  global $pages;

  $section = "";

  foreach ($pages as $page) {
    if ($page["slug"] == $slug) {
      $section = $page["url"];
    }
  }

  if (empty($section)) {
    return "404";
  }

  require "pages/content/$section.html";
}

function get_next_and_prev(string $section)
{
  global $pages;

  $next = null;
  $prev = null;

  foreach ($pages as $key => $page) {
    if ($page["slug"] == $section) {
      $next = isset($pages[$key + 1]) ? $pages[$key + 1]["url"] : null;
      $prev = isset($pages[$key - 1]) ? $pages[$key - 1]["url"] : null;
    }
  }

  return [
    "next" => $next,
    "prev" => $prev
  ];
}
