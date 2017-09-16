<html>
<title>Parse logs through PHP</title>
<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
<head>
<body>
  <?php
    $file   = "diag.i-exam.ru.log";
    $server = "localhost";
    $user   = "root";
    $pass   = "";
    $dbname = "logdb";
    $table  = "log";
    
    echo "<div class=\"caption\">Trying to create DB & table...<br /></div>";
    require_once 'models/create_db.php';
    
    echo "<div class=\"caption\"><br />Trying to insert log into DB...<br /></div>";
    require_once 'controllers/parse.php';
    
    echo "<div class=\"caption\"><br />Show max numbers...<br /></div>";
    require_once 'views/statistics.php';
  ?>
  <br /><br />
</body>
</html>