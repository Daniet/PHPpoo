<?php

  $employee->set('id', explode('/', $_SERVER['REQUEST_URI'])[3]);
  print_r($employee->detail());

?>
