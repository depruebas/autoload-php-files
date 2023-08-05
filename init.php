<?php

  use Controllers\PruebasController;
  use libraries\ErrorClass;
  use libraries\PDO;

  spl_autoload_register( function( $class){
    require_once dirname(__FILE__) . "/" . str_replace( "\\", "/", $class) . ".php";
  });

  $pruebas = new PruebasController();
  $pruebas->test();

  $error = new ErrorClass();
  $error->test();

  $pdo = new PDO();
  $pdo->test();