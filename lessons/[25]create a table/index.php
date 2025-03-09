
<?php
include('db_connect.php');

$insert_query = "INSERT INTO users (username, password)
VALUES('Kaleb', '1234')";

mysqli_query($conn, $insert_query);

mysqli_close($conn);

?> 



