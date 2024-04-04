<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="Volume of Pyramid, in PHP" />
    <meta name="keywords" content="mths, icd2o" />
    <meta name="author" content="Calista.E" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.pink-purple.min.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
    <link rel="manifest" href="site.webmanifest" />
    <title>Volume of Pyramid,in PHP</title>
  </head>
  <body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Volume of Pyramid, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/area_of_trinagle.png" alt="laptop image" width="250" />
      </div>
      <br />
      <div class="page-content">please enter integers for dimensions:</div>
      <div class="page-content-php">
        <form action="answer.php" method="POST">
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="length-of-pyramid">
            <label class="mdl-textfield__label" for="length-of-pyramid">Length of pyramid (mm)</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <br />
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="width-of-pyramid">
            <label class="mdl-textfield__label" for="width-of-pyramid">Width of pyramid (mm)</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <br />
          <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="height-of-pyramid">
          <label class="mdl-textfield__label" for="height-of-pyramid">height-of-pyramid (mm)</label>
          <span class="mdl-textfield__error">Input is not a number!</span>
      </div>
      <br />
      <!-- Accent-colored raised button with ripple -->
      <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
        Calculate
      </button>
      </form>
  </div>
  </main>
  </div>
</body>
</html>