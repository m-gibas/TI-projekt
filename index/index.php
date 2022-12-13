<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Projekt - TI</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="button.css" />
  <script src="obliczeniajs.js" defer></script>

  <?php
    function __autoload($class_name) {
      include $class_name . '.php';
    }
    $user = new Register_new;
  ?>
</head>

<body>
  <div class="container">
    <header>
      <h1>Spadek sprężysty piłeczki</h1>
    </header>
    <nav>
      <?php
        if (!$user->_is_logged()) {
          echo "<div><a href=\"index.html\">Strona główna</a></div>";
          echo "<div><a href=\"reg.html\">Rejestracja</a></div>";
          echo "<div><a href=\"log.html\">Logowanie</a></div>";
        } else {
          echo "<div><a href=\"index.html\">Strona główna</a></div>";
          echo "<div><a href=\"profil.php\">Profil użytkownika</a></div>";
          echo "<div><a href=\"out.php\">Wylogowanie</a></div>";
        }
      ?>
    </nav>
    <section>
      <form method="post" action="phpSave.php" id="height-form">
        <label for="quantity">
          Podaj wysokość, z jakiej ma spadać piłeczka (od 1 do 10):
        </label>
        <input type="number" id="quantity" name="quantity" min="1" max="10" />
        <button id="mylink">Zatwierdź wybór</button>
        <?php
        if ($user->_is_logged()) {
          // echo "<form method=\"post\" action=\" phpSave.php\">";
          // echo "<button id=\"userChoices\" onclick=\"phpSave()\">Zapisz swoje wybory</button>";
          echo "<button type=\"submit\" id=\"userChoices\">Zapisz swoje wybory</button>";
          // echo "</form>";
        }
        ?>
      </form>
      <div>
        <button onclick="createCircle()">Rysuj</button>
        <button onclick="createCircle2x()">Rysuj 2x szybciej</button>
        <button onclick="createCircle5x()">Rysuj 5x szybciej</button>
        
      </div>
      <div>
        <div class="text-center">
          <canvas id="animation" width="900" height="600" style="border: 2px solid #2d0057; background: #2d0057"></canvas>
        </div>
      </div>
    </section>
  </div>

  <script>
    var myLink = document.getElementById("mylink");
    let iterations = 0;

    myLink.onclick = function() {
      if (iterations === 0) {
        oblicz();

        setTimeout(() => {
          script = document.createElement("script");
          script.type = "text/javascript";
          script.src = "canvas.js";
          document.getElementsByTagName("head")[0].appendChild(script);
        }, 50);

        iterations++;
      } else {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        // window.cancelAnimationFrame(myReq);
        cancelAllAnimationFrames();
        i = 0;
        oblicz();
        canvas.width = T[T.length - 1] * 105;
        canvas.height = H[0] * 120;
      }

      return false;
    };

    function cancelAllAnimationFrames() {
      var id = window.requestAnimationFrame(function() {});
      while (id--) {
        window.cancelAnimationFrame(id);
      }
    }

    function phpSave() {
      <?php
        $choices = new Choices;
        $choices->_readChoices();
        $choices->_saveChoices();
        echo "console.log(\"dziala\")";
      ?>
    }

  </script>
</body>

</html>