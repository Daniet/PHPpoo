<?php namespace Ctrls;
  use Models\HistoryPay as HistoryPay;
  /**
   *
   */
  class historypayCtrl{

    private $historypay;
    private $id;

    public function set($attr, $value){
      $this->$attr = $value;
    }

    public function __construct(){
      $this->historypay = new HistoryPay;
    }

    public function index(){
      $data = $this->historypay->list();
      $dataList = [];
      foreach ($data as $key => $value){
        $value['url'] = $_SERVER['HTTP_HOST'] . $_SERVER['PATH_INFO'] . DS . $value['id_history_pay'];
        $dataList[$key] = $value;
      }
      return json_encode($dataList);
    }

    public function detail(){
      $id = $this->id;
      $this->historypay->set('id', $id);
      $data = $this->historypay->detail();
      $dataList = [];
      foreach ($data as $key => $value){
        $value['url_employee'] = $_SERVER['HTTP_HOST'] . $_SERVER['PATH_INFO'] . DS . $value['id_history_pay'];
        $dataList[$key] = $value;
      }
      return json_encode($dataList);
    }

  }
  $historypay = new historypayCtrl();
?>
