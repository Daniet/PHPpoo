<?php namespace Ctrls;
  use Models\Employee as Employee;
  /**
   *
   */
  class employeeCtrl{

    private $employee;
    private $id;

    public function set($attr, $value){
      $this->$attr = $value;
    }

    public function __construct(){
      $this->employee = new Employee;
    }

    public function index(){
      $data = $this->employee->list();
      $dataList = [];
      foreach ($data as $key => $value){
        $value['url'] = $_SERVER['HTTP_HOST'] . $_SERVER['PATH_INFO'] . DS . $value['id_employee'];
        $dataList[$key] = $value;
      }
      return json_encode($dataList);
    }

    public function detail(){
      $id = $this->id;
      $this->employee->set('id', $id);
      // $data = $this->employee->detail();
      // $dataDetail = [];
      //
      // return json_encode($data);
      $data = $this->employee->detail();
      $dataList = [];
      foreach ($data as $key => $value){
        $value['url'] = $_SERVER['HTTP_HOST'] . $_SERVER['PATH_INFO'] . DS . $value['id_employee'];
        $dataList[$key] = $value;
      }
      return json_encode($dataList);
    }


    public function delete(){
      $id = $this->id;
      $this->employee->set('id', $id);
      $this->employee->delete();
    }
  }
  $employee = new employeeCtrl();
?>
