<!-- connection to database  -->
<?php include "./config.php" ?>
<!-- editing database  -->
<?php
$id= $_GET["id"];
$deleteQuery="DELETE FROM notes_form WHERE notes_id ='$id'";
$res=mysqli_query($conn, $deleteQuery);
header("location:./notes.php");
?>