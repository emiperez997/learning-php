<?php

require_once "../functions.php";

?>

<?php render_template("head", ["styles_url" => "../css/styles.css"]); ?>

<?php render_template("navbar"); ?>

<main class="container">
  <section>
    <h1>
      Instalacion
    </h1>

    <hr />

    <p>
      Para este curso es necesario que tengas instalado PHP en tu equipo.
      Si vas utilizar un editor online (<i>idx</i>, <i>repl.it</i>, etc) no es necesario
      instalar nada.
    </p>
  </section>

  <section>
    <h2>
      Linux
    </h2>

    <hr>

    <p>
      Para <i>Linux</i>, se puede utilizar el manejador
      de paquetes incorporado. También se podría instalar
      <i>homebrew</i> para instalar PHP.
    </p>

    <pre>
          sudo apt-get install php  
      </pre>

  </section>

  <section>
    <h2>
      Mac OS
    </h2>

    <hr>

    <p>
      En <i>Mac OS</i>, <i>homebrew</i> es el manejador de paquetes
      por defecto. Para instalar PHP, simplemente debemos utilizar este
      instalador.
    </p>

    <pre>
          brew install php
      </pre>
  </section>

  <section>
    <h2>
      Windows
    </h2>

    <hr>

    <p>
      En el caso de <i>Windows</i> hay varias formas de instalar PHP.
      Existen herramientas como <i>XAMPP</i>, <i>WAMP</i> o <i>Laragon</i> que
      permiten gestionar un servidor local con PHP, MySQL y Apache. Pero también se puede instalar PHP de forma manual.
    </p>

    <ol>
      <li>
        <div>
          <p> Descargar PHP desde la página oficial de PHP. </p>
          <img src="../img/installation/installation-1.png" alt="Paso 1 - 1">
          <p> La versión recomendable para descargar es la versión <i>Thread Safe</i></p>
          <img src="../img//installation/installation-2.png" alt="Paso 1 - 2">
        </div>
      </li>
      <li>
        Descomprimir el archivo descargado.
        <img src="../img/installation/installation-3.png" alt="Paso 2">
      </li>
      <li>
        Mover la carpeta descomprimida a la raíz del disco C.
        Renombrar la carpeta a <i>php</i>.
        <img src="../img/installation/installation-4.png" alt="Paso 3">
      </li>
      <li>
        Agregar la ruta de PHP al PATH del sistema.
        <img src="../img/installation/installation-5.png" alt="Paso 4">
      </li>
      <li>
        Para verificar la instalación, abrir una terminal y ejecutar el comando <i>php -v</i>.
        <img src="../img/installation/installation-6.png" alt="Paso 5">
      </li>
    </ol>

    <p>
      Espero te haya servido de ayuda. Si tienes alguna duda, no dudes en
      contactarme.
    </p>
  </section>

  <section>
    <h2>
      Links de interés
    </h2>

    <hr>

    <ul>
      <li>
        <a target="_blank" href="https://www.apachefriends.org/es/index.html">
          XAMPP
        </a>
      </li>
      <li>
        <a target="_blank" href="https://www.neoguias.com/instalar-wamp/">
          WAMP
        </a>
      </li>
      <li>
        <a target="_blank" href="https://laragon.org/">
          Laragon
        </a>
      </li>
    </ul>
  </section>

</main>