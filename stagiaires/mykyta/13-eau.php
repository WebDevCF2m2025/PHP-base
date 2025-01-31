<?php
$température = 150;
if($température<0){
  echo "L'eau est solide à " .$température . "°C"; 
}elseif($température>0 && $température<99){
  echo "L'eau est liquide à " .$température . "°C";
}else{
  echo "L'eau est gazeuse à "  .$température . "°C";
}
?>