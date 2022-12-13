<?php
header("Location: index.php");

    $choices = new Choices;
    $choices->_readChoices();
    $choices->_saveChoices();
    echo "console.log(\"dziala\")";
exit();
?>