<?php

class Cancion {
  private string $titulo;
  private string $autor;

  function __construct(?string $titulo, ?string $autor)
  {
    $this->titulo = $titulo ?? '';
    $this->autor = $autor ?? '';
  }

  function dameTitulo(): string {
    return $this->titulo;
  }

  function dameAutor(): string {
    return $this->autor;
  }

  function ponTitulo (?string $titulo): void {
    $this->titulo = $titulo;
  }

  function ponAutor (?string $autor): void {
    $this->autor = $autor;
  }
}
