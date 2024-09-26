<?php

$password = $_GET["password"];

if ($password != "supersecret") {
    echo "bad password";
    die();
}

$fileContents = file_get_contents("./hiddenfile.wtf");
echo $fileContents;
