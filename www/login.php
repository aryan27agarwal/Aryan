<?php
require_once('../vendor/autoload.php');
    $sql = "SELECT * FROM recruits WHERE username = ?";
    $data = array('username' => 'ecellGdguCa01');
    $stmt = $db->query($sql, $data);
    foreach($stmt as $row) 
    {
        var_dump($row);
    }
?>
