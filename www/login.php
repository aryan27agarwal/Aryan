<?php
require_once('../vendor/autoload.php');
$db = new Database;
$sql = "SELECT * FROM recruits WHERE username = :username";
$data = array('username' => 'ecellGdguCa01');
$stmt = $db->query($sql, $data);
var_dump($stmt->fetch());
?>
