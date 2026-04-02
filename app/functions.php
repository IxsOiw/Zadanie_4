<?php 

function title($title){
  return "$title";
}

function redirect($url){
  header("Location: $url");
  exit();
}

?>
