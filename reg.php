<?php
header("Location: index.php");

function __autoload($class_name) {
    include $class_name . '.php' ;
}
 
$reg = new Register_new ;
$reg->_read();
$reg->_save();
exit();
?>