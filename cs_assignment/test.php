<?php
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone"); 
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android"); 

  $ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
  if($android){
    echo "android";
  } 
 elseif($iphone){
    echo "iphone"; 
 }
elseif($ipod){
    echo "ipad"; 
}
else { 
    echo " laptop";
   } 
?>
