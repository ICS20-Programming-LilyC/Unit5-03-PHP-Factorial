<DOCTYPE html>
<html lang="en-ca">
  <head>

    <!--Meta data-->
    <meta charset="utf-8">
    <meta name="description" content="Factorial webpage">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Lily C">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">

    <!--Stylesheet CSS-->
    <link rel="stylesheet" href="./css/style.css">

    <!--MDL theme-->
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-indigo.min.css" />

    <!--Title-->
    <title>Factorials Webpage</title>
  </head>
  <body>

    <!--Link to JS file-->
    <script src="./js/script.js"></script>

    <!--Header-->
    <?php echo"<h1>Factorials Webpage with PHP</h1>"; ?>

    <!--Welcoming message-->
    <center>
    <?php echo "<p>Welcome to my factorial number webpage. On my webpage you can input an integer and I will calculate the product of these numbers using a DO... WHILE loop.</p>"; ?>
    </center>

    <!--Image-->
    <br>
    <center>
      <img src = "./images/factorial.png" alt="Factorials image" width="300" length="300">
    </center>

    <!--Text-->
    <?php echo "<h3>Please enter your input below:</h3>"; ?>

    <!--Form for user input-->
    <form action="./calculations.php" method="post" target="results"/>
      <label for="number">Enter a number:</label>
      <input type="number" step="1" id="number" name="number" placeholder="Your number...">
      <br>
      <br>

      <!--Adding id to submit button to style button-->
      <input type="submit" id="calculate" value="Calculate!" button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
    </form>
    <br>
    <br>

    <!--Iframe results for the number ranges that will be displayed-->
    <iframe id="results" name="results"></iframe>
    <br>
  </body>
</html>