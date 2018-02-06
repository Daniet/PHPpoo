<?php namespace Models;
  /**
   * Modelo para los trabajadores
   */
  class Employee{

    private $id;
    private $name;
    private $lastname;
    private $typeDocument;
    private $document;
    private $email;
    private $salary;

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
      $sql = 'SELECT * FROM employee as e
        INNER JOIN type_document as td on td.id_type_document = e.id_type_document
      ;';
      $data = $this->con->excecuteSQLReturn($sql);
      return $data;
    }

    public function detail(){
      $id = $this->id;
      // INNER JOIN type_document as td on td.id_type_document = e.id_type_document
      $sql = 'SELECT * FROM employee as e
        WHERE e.id_employee = ' . $id . '
      ;';
      $data = $this->con->excecuteSQLReturn($sql);

      $sql = 'SELECT * FROM employee_phone where id_employee = ' . $id . ';';
      $dataPhone = $this->con->excecuteSQLReturn($sql);

      $data = array(
        'employee' => $dataEmployee,
        'phone' => $dataPhone
      );

      return $data;
    }

    public function add(){
      $sql = 'INSERT INTO employee(e_name, e_lastname, e_document, e_email, id_type_document) VALUES("{$this->name}","{$this->lastname}","{$this->typeDocument}","{$this->document}","{$this->email}","{$this->salay}")';
      $this->con->excecuteSQL($sql);
    }

    public function delete(){
      $sql = 'DELETE FROM employee WHERE id_employee = ' . $this->id . ';';
      print_r($sql);
      $this->con->excecuteSQL($sql);
      return $sql;
    }

    public function edit(){
      $sql = 'UPDATE employee SET e_name = "{$this->name}", e_lastname = "{$this->lastName}", e_document = "{$this->document}", e_mail = "{$this-typeDocument}", e_email = "{$this->email}", e_salary = "{$this-salary}" WHERE id_employee = "{$this->id}"';
      $this->con->excecuteSQL($sql);
      return $sql;
    }

  }

?>
