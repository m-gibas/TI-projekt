<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projekt - TI</title>
    <link rel="stylesheet" href="style.css" />
    <script src="obliczeniajs.js" defer></script>
    <script src="load.js" defer></script>
  </head>
  <body>
    <div class="container">
      <header>
        <h1>Spadek sprężysty piłeczki</h1>
      </header>
      <nav>
        <?php
          function __autoload($class_name) {
              include $class_name . '.php' ;
          }
          $user = new Register_new;
          
          if ( ! $user->_is_logged() )
            {  
                echo "<div><a href=\"index.html\">Strona główna</a></div>";
                echo "<div><a href=\"reg.html\">Rejestracja</a></div>";
                echo "<div><a href=\"log.html\">Logowanie</a></div>";
          
            } 
          else
            {
              echo "<div><a href=\"index.html\">Strona główna</a></div>";
              echo "<div><a href=\"reg.html\">Rejestracja</a></div>";
              echo "<div><a href=\"log.html\">Logowanie</a></div>";
              echo "<div><a href=\"out.php\">Wylogowanie</a></div>";
          }
        ?>
      </nav>
      <section>
        <form id="height-form">
          <label for="quantity">
            Podaj wysokość, z jakiej ma spadać piłeczka (od 1 do 10):
          </label>
          <input type="number" id="quantity" name="quantity" min="1" max="10" />
          <button id="mylink">Zatwierdź wybór</button>
        </form>
        <div>
          <button onclick="createCircle()">Rysuj</button>
          <button onclick="createCircle2x()">Rysuj 2x szybciej</button>
          <button onclick="createCircle5x()">Rysuj 5x szybciej</button>
        </div>
        <div>
          <div class="text-center">
            <canvas
              id="animation"
              width="900"
              height="600"
              style="border: 2px solid #2d0057; background: #2d0057"
            ></canvas>
          </div>
        </div>
      </section>
    </div>
  </body>
</html>
