<?php

const TITLE = "Aprendiendo PHP";

?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= TITLE ?> | Inicio</title>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
  <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="container">
  <header>
    <nav>
      <ul>
        <li>
          <strong>
            <?= TITLE ?>
          </strong>
        </li>
      </ul>
      <ul>
        <li><a href="/">Inicio</a></li>
        <li><a href="">Secciones</a></li>
        <li><a href="">Contacto</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section>
      <h1>
        Introducción
      </h1>

      <hr />

      <p>
        PHP es un lenguaje de programación de uso general.
        Se utiliza del lado del servidor. Originalmente fue diseñado
        para el desarrollo web de contenido dinámico.
      </p>
      <p>
        Fue uno de los primeros lenguajes de programación que se podían
        incorporar directamente en un documento HTML en lugar de llamar
        a un archivo externo que procese los datos.
      </p>
      <p>
        El código es interpretado por un servidor
        web con un módulo de procesador de PHP que genera
        la página web resultante.
      </p>

    </section>

    <section>
      <h2>
        ¿Por qué PHP?
      </h2>

      <hr />

      <p>
        Personalmente es uno de los lenguajes que aprendí primero,
        junto con JavaScript. Me pareció muy fácil de aprender
        y muy útil para el desarrollo web.
      </p>

      <p>
        Es muy rápido en cuestión de rendimiento. Muchas páginas web
        utilizan PHP como lenguaje de programación hoy en dia.
      </p>

      <p>
        También actúa como una herramienta de desarrollo práctica,
        ya que puede ser utilizado para resolver problemas comunes. Además
        de que es muy versatil y con poco, se puede lograr una página web
        decente (como la que estas viendo).
      </p>
    </section>

    <section>
      <h2>
        ¿Qué aprenderemos?
      </h2>
      <hr>

      <p>
        Aunque ya aprendí este lenguaje hace tiempo, me gustaría
        repasar todo y profundizar en ciertos temas. Además de armar
        proyectos (como este) para poner en práctica todo lo que
        veamos.
      </p>
      <p>
        El enfoque de este curso es que puedas aprender desde cero, hasta cosas
        un poco más avanzadas. Tratando de explicar de manera sencilla y clara
        para que puedas entenderlo.
      </p>
      <p>
        Si tienes alguna duda, puedes contactarme en la sección de contacto.
      </p>
    </section>

    <section>
      <h2>
        ¿Quien soy?
      </h2>
      <hr>

      <p>
        Mi nombre es Emiliano Perez. Soy Profesor y Desarrollador Full Stack.
        Manejo tecnologías como JavaScript, TypeScript, Angular, React, Nestjs, Express,
        Prisma, MySQL y MongoDB.
      </p>
      <p>
        Tambien he impartido cursos sobre Java y Python, que tambien son lenguajes
        que me fascinan, aunque sean muy diferentes entre si.
      </p>
      <p>
        Soy un nerd de todo lo que tiene que ver con programación. Tanto de
        herramientas como lenguajes y sus respectivos Frameworks.
      </p>
      <p>
        Como mencione, PHP fue de los primeros lenguajes que aprendí.
        Aunque tengo bases solidas, nunca esta demas volver aprender
        ciertas cosas para reforzar. Sin contar que le tengo cierto
        cariño.
      </p>
      <p>
        Siendo Profesor, me gusta mucho aprender. Considero que
        un buen Profesor es tambien un buen Alumno.
      </p>

      <p>
        Espero que este curso/pagina web te sirva
        y puedas aprender conmigo.
      </p>

    </section>
  </main>


</body>