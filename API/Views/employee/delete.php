<?php

  $employee->set('id', explode('/', $_SERVER['REQUEST_URI'])[3]);
  $employee->delete();
  echo json_encode(array(
    'delete_employee' => $_SERVER['REQUEST_URI'])[3]
  ));

?>
