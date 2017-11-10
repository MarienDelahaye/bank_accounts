<?php
include("../../controllers/db_connect.php");
$db = new DB();
$query = "INSERT INTO bankAccounts(name)";
$db->query($query);