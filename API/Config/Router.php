<?php namespace Config;

  /**
   *
   */
  class Router{

    public static function run(Request $requets){
      $ctrl = $requets->getCtrl() . 'Ctrl';
      $route = ROOT . 'Ctrls'. DS . $ctrl . '.php';

      $def = $requets->getDef();
      $arg = $requets->getArg();

      if(is_readable($route)){
        require_once $route;
        $show = 'Ctrls\\' . $ctrl;
        $ctrl = new $show;
        if(isset($def)){
          call_user_func(array($ctrl, $def));
        }else{
          call_user_func_array(array($ctrl, $def, $arg));
        }
      }

      $route = ROOT . 'Views' . DS . $requets->getCtrl(). DS . $requets->getDef() . '.php';
      if(is_readable($route)){
        // echo 'Api '. $route;
        require_once $route;
      }else {
        echo '<h3>' . $route . '</h3>';
      }
    }
  }

?>
