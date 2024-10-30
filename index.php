<?php
const TITLE = "Aprendiendo PHP";

$pages = scandir("pages/");

$pages = array_filter($pages, function ($file) {
  return strpos($file, ".php") !== false;
});

$pages = [
  "introducción" => "introduction.php",
  "instalación" => "installation.php",
  "sintaxis" => "syntax.php",
];



?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= TITLE ?> | Inicio</title>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.colors.min.css">
  <link rel="stylesheet" href="./css/styles.css">
  <link rel="icon" type="image/svg+xml" href="./img/php-logo.svg">
</head>

<body>
  <header>
    <nav class="container">
      <ul>
        <li>
          <strong>
            <?= TITLE ?>
          </strong>
        </li>
      </ul>
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Secciones</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </nav>
  </header>

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
        <?php foreach ($pages as $title => $url) : ?>
          <article>
            <h3 class="uppercase">
              <?= $title ?>
            </h3>
            <a href="pages/<?= $url ?>">
              <button>
                Ver sección
              </button>
            </a>
          </article>
        <?php endforeach; ?>
      </aside>
    </section>
  </main>


</body>