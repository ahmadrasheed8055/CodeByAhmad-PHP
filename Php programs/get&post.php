<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Get and Post</title>
  </head>
  <body>
  <?php
   echo $_SERVER['PHP_SELF'];
    ?>
    <form action="/php_programs/get&post.php" method = "post">
        Name : <input type="text" name="name" id="name">
        <br>
        Age : <input type="text" name="age" id="age">
        <input type="submit" value="submit">
    </form>
  
  </body>
</html>