<?php
header("Location: index.php");

function __autoload($class_name) {
    include $class_name . '.php' ;
}
 
$user = new Register_new;
 
echo $user->_login() ;
exit();
?>