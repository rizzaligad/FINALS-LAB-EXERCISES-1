<?php
$json_data = file_get_contents('php://input');
$data = json_decode($json_data);

echo "Username: " . $data->username . "<br>";
echo "Password: " . $data->password;
?>
