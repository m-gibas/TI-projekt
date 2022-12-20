<?php
// header("Location: index.php");

function __autoload($class_name) {
    include $class_name . '.php' ;
}

    $choices = new Choices;
    $choices->_readChoices();
    // $choices->_write();
    echo $choices->_saveChoices();
    echo "<style>body { background: violet; } p { text-align: center; font-size: 2rem; font-weight: bold; margin: 5rem; }</style>";
    echo "<p>Zapisano wybór wysokości użytkownika</p>";
    echo "<script>";
    echo "setTimeout(() => {";
    echo "javascript:history.go(-1)";
    echo "}, 1500);";
    echo "</script>";
// exit();
?>