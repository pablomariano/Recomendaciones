<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', DS . "Recomendaciones" . DS);

class Config{

  static private $configuracion = array(
  
  );

  static function get()$name{
    return self::$configuracion[$name];
  }
}
?>
