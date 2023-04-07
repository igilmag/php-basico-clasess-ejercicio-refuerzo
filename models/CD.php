<?php
require_once('Cancion.php');

class CD {
  private array $canciones = [];

  /**
   * __constructor(): constructor predeterminado (creará el array canciones).
   * 
   * @param {...Cancion} $canciones Spread Operator para poner una lista de canciones
   */
  function __construct (Cancion ...$canciones) {
    $this->canciones = $canciones;
  }

  /**
   * Retorna un array de canciones
   * 
   * @return { array }
   */
  function getCanciones (): array {
    return $this->canciones;
  }

  /**
   * numeroCanciones(): devuelve el valor del contador de canciones.
   * 
   * @return {int} número de canciones
   */
  function numeroCanciones (): int {
    return count($this->canciones);
  }

  /**
   * grega(Cancion): agrega al final del array la Cancion proporcionada.
   * 
   * @param {Cancion} $cancion
   */
  function agrega (Cancion $cancion): void {
    array_push($this->canciones, $cancion);
  }

  /**
   * elimina(int): elimina la Cancion que se encuentra en la posición indicada
   *   
   * @param {int} $key Índice del array de tipo Canción
   * @return {Cancion|null} Si el índice existe retorna la canción eliminada en caso contrario nul por no conseguir realizar la acción
   */  
  function elimina (int $key): Cancion|null {
    if (array_key_exists($key, $this->canciones)) {
      $cancionEliminada = $this->canciones[$key];
      unset($this->canciones[$key]);
      return $cancionEliminada;
    }
    return null;
  }

  /**
   * grabaCancion(int, Cancion): cambia la Cancion de la posición 
   * indicada por la nueva Cancion proporcionada.
   *   
   * @param {int} $key Índice del array de tipo Canción
   * @param {Cancion} $cancion Canción a insertar en el índice
   * @return {Cancion|null} Si el índice existe retorna la canción eliminada en caso contrario nul por no conseguir realizar la acción
   */
  function grabaCancion (int $key, Cancion $cancion): Cancion|null {
    if (array_key_exists($key, $this->canciones)) {
      $cancionEliminada = $this->canciones[$key];
      $this->canciones[$key] = $cancion;
      return $cancionEliminada;
    }
    return null;
  } 
}
