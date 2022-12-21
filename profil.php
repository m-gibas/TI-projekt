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

        $hasValue = false;
        $table = $choices->_read_choices();
        echo 'Wysokość użytkownika: ';
        foreach ( $table as $key => $record ) {
            echo $record['quantity']."<br>";
            if ($record['quantity'] != null) {
              $hasValue = true;
            }
        }

        }
      ?>
    </div>
    <?php
      if($hasValue) {
        echo "<a class=\"getBack\" type=\"button\" onclick=\"javascript:history.go(-1)\">Powrot do strony głównej z ostatnio wybranym parametrem</a> ";
      }
    ?>
      <a class="getBack" href='index.php'>Powrot do strony głównej z pustym parametrem</a>
   </div>
  </body>
</html>