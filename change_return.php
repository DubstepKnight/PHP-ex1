<?php include "menu.php"; ?>
<?php
include "connection.php";

$stmt = $db->prepare("UPDATE borrows SET return_date=:return_date WHERE books_id = :books_id");
$stmt->bindParam(':return_date',$_POST['return_date']);
$stmt->bindParam(':books_id',$_POST['books_id']);
$stmt->execute();

?>
<form action="update_return.php" method="post" class="">
    <input type="hidden" name="books_id" value="<?php echo $_GET['books_id']; ?> "> <br>
    <label for="">Return date </label> <br>
    <input type="date" name="return_date" value="<?php echo $_GET['return_date']; ?>"> <br>
    <input type="submit" name="" value="UPDATE">
</form>
<?php include "footer.php"; ?>