<?php include "menu.php";?>
<?php
  //session_start();
  if (isset($_SESSION['logged_in'])) 
  {
    echo '<b>'.$_SESSION['username'].'</b>';
  }
  else
  {
    echo '<b>Guest</b>';
  }
?>
    <h1> Associative array </h1>
    <?php
    $students=array
    (
      array("fn"=>'Jim', "ln"=>'Smith'),
      array("fn"=>'Lisa', "ln"=>'Jones'),
      array("fn"=>'Bill', "ln"=>'Daniels')
    );
    ?>
    <h3>print_r -function</h3>
    <?php print_r($students); ?>
    <h3>foreach -loop</h3>
    <ul>
      <?php
      foreach ($students as $row) 
      {
        echo '<li>'.$row['fn'].' '.$row['ln'].'</li>';
      }  
      ?>
    </ul>
    <h3>array to html-table</h3>
    <table border="1">
      <thead>
        <tr>
          <th>Firstname</th><th>Lastname</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($students as $row) 
        {
          echo '<tr>';
          echo '<td>'.$row['fn'].'</td>';
          echo '<td>'.$row['fn'].'</td>';
          echo '</tr>';
        }
        ?>
      </tbody>
    </table>
<?php include "footer.php"; ?>