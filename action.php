<?php
include("db/connect_db.php");
$response = '';
$textcontent = $_POST['query'];
$search = "SELECT * FROM project WHERE pro_title LIKE '%$textcontent%'";
$run = mysqli_query($connect, $search);
$check = mysqli_num_rows($run);
if($check > 0){
    while($pdetails = mysqli_fetch_assoc($run)){
        echo '<div class="p-1" style="border: 1px solid grey;">
        <p class="font-weight-bold">Project Tittle : <a class="font-weight-bold" href="#">'.$pdetails['pro_title'].'</a></p>
        <hr/>
        <p class="font-weight-bold">Uploaded by:<small>'.$pdetails['upload_by'].'</small> On : <small>'.$pdetails['upload_date'].'</small></p>
      </div>';
    }
}else{
    echo "<p>No Project Found</p>";
}