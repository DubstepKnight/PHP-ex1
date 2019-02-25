<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Third</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="main.js"></script>
</head>
<body>
    <div id="menu">
    <h2>Menu</h2>
    <ul>
      <li> <a href="login.php">Login</a></li>
      <li> <a href="logout.php">Logout</a></li>
      <li> <a href="firstPHP.php">Basic</a></li>
      <li> <a href="second.php">Array</a></li>
      <li> <a href="third.php">Forms</a></li>
      <li> <a href="fourth.php">Functions</a></li>
      <li> <a href="fifth.php">Calculator</a></li>
    </ul>
    <h2>Database</h2>
    <ul>
        <li> <a href="books.php">Books</a> </li>
        <li> <a href="borrows.php">Borrows</a> </li>

    </ul>
    </div>
    <div id="header">
        Welcome
        <?php
        session_start();

        if (isset($_SESSION['logged_in'])) 
        {
            echo '<b>'.$_SESSION['username'].'</b>';
        }
        else
        {
            echo '<b>Guest</b>';
        }
        ?>
    </div>
    <div id="container">