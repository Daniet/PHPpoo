<?php

  $historypay->set('id', explode('/', $_SERVER['REQUEST_URI'])[3]);
  echo $historypay->detail();

?>
