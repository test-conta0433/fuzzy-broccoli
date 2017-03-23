<?php
include 'soma.php';

$command = substr($argv[1],1);

if(function_exists($command)){
  $param = $argv;
  $command($param);
}else{
  echo "Comando '$command' inexistente";
}

function ajuda(){
  echo <<<EOT
  Comandos:
  -soma a b
  -subt a b
  -mult a b
  -divd a b 
EOT;
}
