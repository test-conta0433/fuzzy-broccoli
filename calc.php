<?php

$command = substr($argv[1],1);

if(function_exists($command)){
  $param = $argv;
  $command($param);
}else{
  echo "Comando '$command' inexistente";
}