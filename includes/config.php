<?php
ob_start();

$timezone = date_default_timezone_set("Indian/Maldives");

$con = mysqli_connect("localhost", "root", "123", "sloth");

if (mysqli_connect_error()) {
    echo "Fail to connect: " . mysqli_connect_error();
}