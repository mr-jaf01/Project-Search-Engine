<?php
$DB_NAME = "projectsearch";
$DB_USER = "root";
$DB_PASS = "";
$DB_HOST = "localhost";
$connect = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME) or die("CAN NOT CONNECT TO SERVVER / DB NOT FOUND");