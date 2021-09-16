<?php
include('db/connect_db.php');
$projectid = $_GET['projectid'];
$delete = "DELETE FROM project WHERE pro_id='$projectid'";
if(mysqli_query($connect,$delete)){
    header('location:index.php?page=viewproject');
}
?>