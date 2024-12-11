# Aprendiendo PHP desde Cero

Este repositorio tiene como fin aprender PHP desde cero. Es una guía desde lo básico hasta donde lleguemos.

## Requisitos

- Conocimientos básicos de HTML, CSS y JavaScript
- Conocimientos básicos de Git y GitHub
- Conocimientos básicos de lógica de programación

## Herramientas

A continuación voy a detallar las herramientas que utilizaré durante la creación de este material. No es necesario que utilices lo mismo que yo, pero si quieres puedes hacerlo.

**Extensiones**:

- Vim
- Bearded Icons
- Prettier
- Nerdtree
- Ayu
- Supermaven

# Configuración Previa

Como vamos a trabajar con IDX, lo mejor es personalizar el entorno. IDX nos ofrece un entorno muy configurable con el lenguaje `nix`. Por defecto se crea una carpeta llamada `.idx` donde se guarda toda esta configuración. En este repositorio te dejaré la configuración que uso yo.

Más allá de personalizar el entorno, es necesario instalar el paquete de `PHP` en IDX.

```nix
{ pkgs, ... }: {
  # ...
  packages = [
    pkgs.php
  ];
}
```

Para comprobar que esté instalado y cuál es la version, debemos ejecutar el siguiente comando:

```bash
php --version

PHP 8.2.24 (cli) (built: Sep 24 2024 22:12:40) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.2.24, Copyright (c) Zend Technologies
    with Zend OPcache v8.2.24, Copyright (c), by Zend Technologies
```

| Tipo de Dato       | Descripción                                                                                   | Ejemplo de Declaración                  |
| ------------------ | --------------------------------------------------------------------------------------------- | --------------------------------------- |
| **Escalares**      |                                                                                               |                                         |
| `int` (Entero)     | Representa números enteros, positivos o negativos.                                            | `$numero = 42;`                         |
| `float` (Flotante) | Números decimales o de punto flotante.                                                        | `$precio = 9.99;`                       |
| `string` (Cadena)  | Cadena de caracteres, usada para almacenar texto.                                             | `$nombre = "PHP";`                      |
| `bool` (Booleano)  | Representa valores de verdad: `true` o `false`.                                               | `$esActivo = true;`                     |
| **Compuestos**     |                                                                                               |                                         |
| `array`            | Conjunto ordenado de valores, indexados por claves. Puede almacenar múltiples tipos de datos. | `$numeros = [1, 2, 3, 4];`              |
| `object`           | Instancia de una clase, usada para trabajar con programación orientada a objetos.             | `$persona = new Persona();`             |
| **Especiales**     |                                                                                               |                                         |
| `resource`         | Hace referencia a recursos externos como conexiones a bases de datos o archivos abiertos.     | `$archivo = fopen("archivo.txt", "r");` |
| `null`             | Representa una variable sin valor.                                                            | `$variable = null;`                     |

# Roadmap hacia Laravel

**Desarrollo Web**

- HTML
- CSS
- JavaScript
- Git y GitHub
- Práctica: Sitio web

**PHP**

- Conceptos básicos
- POO
- MVC
- Práctica: Primer proyecto
- Autenticación y autorización
- Bases de Datos y MySQL
- Composer

**Laravel**

- Instalación
- Primer aplicación
- CRUD con Eloquent
- Sitio web con Laravel
- API
- Implementa Frontend
