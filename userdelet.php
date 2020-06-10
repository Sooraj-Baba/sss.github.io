<?php

include 'connection.php';

$showid = $_GET['dels'];
$trash = "DELETE FROM register WHERE id=$showid";
$check = mysqli_query($scon, $trash);
header('location:admin_panel.php');