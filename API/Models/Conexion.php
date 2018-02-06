<?php namespace Models;
  /**
   * Conexion de base de datos
   */
  class Conexion{

    private $data = array(
      'host'=> '127.0.0.1',
      'user'=> 'root',
      'pass'=> 'root',
      'db'=> 'workers'
    );

    private $con;

    public function __construct(){
      $this->con = new \mysqli(
        $this->data['host'],
        $this->data['user'],
        $this->data['pass'],
        $this->data['db']
      );
    }

    public function excecuteSQL($sql){
      $this->con->query($sql);
    }

    public function excecuteSQLReturn($sql){
      $data = $this->con->query($sql);
      return $data;
    }
  }

?>
