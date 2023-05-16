<?php

$conn = mysqli_connect("localhost", "root", "", "dan");

if(!$conn){
    die("Failed to connect");
}