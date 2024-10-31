<?php

require_once "../functions.php";

?>

<?php render_template("head", ["styles_url" => "../css/styles.css"]); ?>

<?php render_template("navbar"); ?>

<main class="container">
  <section>
    <h1>
      Sintaxis
    </h1>

    <hr />

    <p>
      Antes de ver la sintaxis de PHP es importante que
      tengas instalado PHP (podés ver como instalarlo en
      la sección anterior), y también algún editor de código
      como Visual Studio Code, Sublime Text, Atom, etc.
    </p>

    <p>
      Si estás utilizando Visual Studio Code, podés instalar
      la extensión de PHP para tener un mejor soporte del lenguaje.
      La extensión se llama <i>PHP Intelephense</i>.
    </p>
    <p>
      Si te interesa, te dejo mi
      <a href="https://github.com/emiperez997/VSCode.Dots" target="_blank">
        configuración de Visual Studio Code.
      </a>
    </p>
    <p>
      El código es interpretado por un servidor
      web con un módulo de procesador de PHP que genera
      la página web resultante.
    </p>

    <p>
      También hay que aclarar que para escribir código en PHP
      debemos hacerlo dentro de las etiquetas <i>&lt;?php</i> y <i>?&gt;</i>.
      Además debemos crear archivos con extensión <i>.php</i>.
    </p>

    <p>
      Una vez dicho esto, veremos la sintaxis de PHP.
    </p>
  </section>

  <section>
    <h2>
      Imprimir información en pantalla
    </h2>

    <hr>

    <ul>
      <li>
        <i><b>Echo:</b></i> Nos permite imprimir texto en pantalla.
      </li>
      <li>
        <i><b>Print:</b></i> Funciona de la misma manera que <i>echo</i>,
        pero solo puede imprimir un argumento y siempre retorna 1.
      </li>
      <li>
        <i><b>Print_r:</b></i> Se utiliza para imprimir información sobre
        variables, como arrays.
      </li>
      <li>
        <i><b>Var_dump:</b></i> Muestra información sobre una variable,
        incluyendo su tipo y valor.
      </li>
    </ul>


    <pre>
          &lt;?php<br />
          echo "Hola Mundo";<br />
          print "Hola Mundo";<br />
          print_r($array);<br />
          var_dump($variable);<br /> 
          ?&gt;
      </pre>


  </section>

  <section>
    <h2>Variable y Tipo de Datos</h2>

    <hr>

    <p>
      Para declarar variables debemos hacer uso del signo <i>$</i>.
      Hay que tener en cuenta que PHP es un lenguaje de tipado débil,
      por lo que no es necesario declarar el tipo de dato de la variable.
    </p>

    <pre>
          &lt;?php<br />
          $nombre = "Emiliano";<br />
          $edad = 24;<br />
          ?&gt;
      </pre>

    <p>
      El tipo de dato es <i>inferido</i>, lo que quiere decir que tiene
      el tipo de dato coincide con el valor que le asignamos.
    </p>

    <p>
      PHP soporta los siguientes tipos de datos:
    </p>

    <table>
      <thead>
        <tr>
          <th>Tipo de Dato</th>
          <th>Descripción</th>
          <th>Ejemplo de Declaración</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>int</strong> (Entero)</td>
          <td>Representa números enteros, positivos o negativos.</td>
          <td><code>$numero = 42;</code></td>
        </tr>
        <tr>
          <td><strong>float</strong> (Flotante)</td>
          <td>Números decimales o de punto flotante.</td>
          <td><code>$precio = 9.99;</code></td>
        </tr>
        <tr>
          <td><strong>string</strong> (Cadena)</td>
          <td>Cadena de caracteres, usada para almacenar texto.</td>
          <td><code>$nombre = "PHP";</code></td>
        </tr>
        <tr>
          <td><strong>bool</strong> (Booleano)</td>
          <td>Representa valores de verdad: <code>true</code> o <code>false</code>.</td>
          <td><code>$esActivo = true;</code></td>
        </tr>
        <tr>
          <td><strong>array</strong></td>
          <td>Conjunto ordenado de valores, indexados por claves.</td>
          <td><code>$numeros = [1, 2, 3, 4];</code></td>
        </tr>
        <tr>
          <td><strong>object</strong></td>
          <td>Instancia de una clase, usada en programación orientada a objetos.</td>
          <td><code>$persona = new Persona();</code></td>
        </tr>
        <tr>
          <td><strong>resource</strong></td>
          <td>Referencia a recursos externos como archivos o conexiones de BD.</td>
          <td><code>$archivo = fopen("archivo.txt", "r");</code></td>
        </tr>
        <tr>
          <td><strong>null</strong></td>
          <td>Representa una variable sin valor.</td>
          <td><code>$variable = null;</code></td>
        </tr>
      </tbody>
    </table>
  </section>

  <section>
    <h2>
      Levantar un Servidor Local
    </h2>

    <hr>

    <p>
      Para levantar un servidor local y poder visualizar
      el código PHP que escribimos, debemos abrir una terminal
      en la carpeta donde se encuentra nuestro proyecto y
      ejecutar el siguiente comando:
    </p>

    <pre>
          php -S localhost:8000
      </pre>

    <p>
      Luego, abrimos un navegador y escribimos en la barra de direcciones
      <i>localhost:8000</i> y veremos nuestro proyecto.
    </p>

    <img src="../img/sintaxis/sintaxis-2.png" alt="Resultado del Código">

    <br>

    <p>
      Si queremos detener el servidor, simplemente debemos presionar
      <kbd>Ctrl + C</kbd> en la terminal.
    </p>
  </section>

</main>


</body>