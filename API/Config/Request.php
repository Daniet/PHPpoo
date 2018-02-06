<?php namespace Config;
  /**
   *
   */
  class Request{

    private $ctrl;
    private $def;
    private $arg;

    public function __construct(){

      $route = str_replace('index.php', '', $_SERVER['PHP_SELF']);
      $route = explode('/', $route);
      $route = array_filter($route);

      $this->ctrl = strtolower(array_shift($route));
      $this->def = strtolower(array_shift($route));
      if(!$this->def){
        $this->def = 'index';
      }
      $this->arg = $route;
    }

    public function getCtrl(){
      return $this->ctrl;
    }

    public function getDef(){
      return $this->def;
    }

    public function getArg(){
      return $this->arg;
    }
  }

?>
