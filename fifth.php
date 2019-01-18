<?php include "menu.php";?>
    <form class="" action="fifth.php" method="post">
      <label class="form-check-label" for="">Write two numbers</label><br>
        <input type="text" name="a" id="" value="" >
        <input type="text" name="b" id="" value="" >
        <input type="submit" name="btn" id="" value="Sum" >
      </label>
    </form>
    <?php
    if(isset($_POST['btn']))
    {
        $result=$_POST['a'] + $_POST['b'];
        echo 'the sum is '.$result;
    }
    ?>
<?php include "footer.php";?>
