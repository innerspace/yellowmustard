<?php 
// setup smarty here 
$smarty = new Smarty(); 
$smarty->template_dir = "/var/www/calibre-php/smarty/templates"; 

// use your template filename, and be sure to put the "/" in there 
// if your template_dir does not have a trailing "/" 
$myfile = $smarty->template_dir . "/login.tpl"; 
echo "attempting to read $myfile\n"; 
readfile($myfile); 
?>

