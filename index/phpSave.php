<?php
// header("Location: index.php");

function __autoload($class_name) {
    include $class_name . '.php' ;
}

    $choices = new Choices;
    $choices->_readChoices();
    $choices->_write();
    echo $choices->_saveChoices();
    echo " console.log(\"dziala\")";
// exit();
?>