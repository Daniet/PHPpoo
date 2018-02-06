<?php namespace Models;
  /**
   *
   */
  class HistoryPay{

    private $id;
    private $date;
    private $pay;
    private $idEmployee;

    private $con;

    function __construct(){
      $this->con = new Conexion();
    }

    public function set($attr, $value){
      $this->$attr = $value;
    }

    public function get($attr){
      return $this->$attr;
    }

    public function list(){
      $sql = 'SELECT * FROM history_pay as hp
	       INNER JOIN employee as e on e.id_employee = hp.id_history_pay
      ;';
      $data = $this->con->excecuteSQLReturn($sql);
      return  $data;
    }

    public function detail(){
      $sql = 'SELECT * FROM history_pay as hp
	       INNER JOIN employee as e on e.id_employee = hp.id_history_pay
         WHERE e.id_employee = ' . $this->id . '
      ;';
      $data = $this->con->excecuteSQLReturn($sql);
      return  $data;
    }
  }

?>
