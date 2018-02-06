<?php namespace Config;
  /**
   *
   */
  class Autoload{

    public static function run(){
      spl_autoload_register(function($class){
        $route = str_replace('\\', '/', $class) . '.php';
        // echo '<h1>' . $route . '</h1>';
        include_once $route;
      });
    }

    // function __construct(argument){
    //   # code...
    // }

  }

?>
