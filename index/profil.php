
 



<!DOCTYPE HTML>
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Formularz rejestracyjny</title>
  <link rel="stylesheet" href="form.css" />
  <?php
    function __autoload($class_name) {
        include $class_name . '.php' ;
    }
    $user = new Register_new ;
    $choices = new Choices;
  ?>

  </head>
  <body>
   <div class="container">
    <div class="writeUser">
      <?php
        if ( $user->_is_logged() ) { 
        $user->_read_user();
        echo $user->_write();
        // $choices->_read_choices();
        // echo $choices->_write();


        $table = $choices->_read_choices();
        echo 'Informacje uzytkownika : '. $choices->_get_user() . '<br><br>';
        foreach ( $table as $key => $record ) {
            echo $record['quantity']."<br>";
        }

        }
      ?>
    </div>
      <a id="getBack" href='index.php'>Powrot do strony głównej</a>
   </div>
  </body>
</html>