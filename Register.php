<?php
$con = mysqli_connect("my_host", "my_user", "my_password", "my_db");
$username = $_POST["username"];
$password = $_POST["password"];
$statement = mysqli_prepare($con, "INSERT INTO user (userid, username, password) VALUES (?,?,?)");
mysqli_stmt_bind_param($statement, "siss", $userid, $username, $password);
mysqli_stmt_execute($statement);
$response = array( );
$response["success"] = true;
echo json_encode($response);
?>