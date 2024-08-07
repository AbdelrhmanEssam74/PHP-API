<?php

$response = file_get_contents("https://jsonplaceholder.typicode.com/users");
$response = json_decode($response, true);
foreach ($response as $key => $user) {
    echo "Username: " . $user['username'] . "<br>";
}


