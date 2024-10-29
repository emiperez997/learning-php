# Aprendiendo PHP desde Cero

Este repositorio tiene como fin aprender PHP desde cero. Es una guía desde lo básico hasta donde lleguemos.

## Requisitos

- Conocimientos básicos de HTML, CSS y JavaScript
- Conocimientos básicos de Git y GitHub
- Conocimientos básicos de lógica de programación

## Herramientas

A continuación voy a detallar las herramientas que utilizaré durante la creación de este material. No es necesario que utilices lo mismo que yo, pero si quieres puedes hacerlo.

**Editor de Código**: IDX de Google

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
