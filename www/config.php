<?php
   $host        = getenv('HOST');
   $port        = getenv('DB_PORT');
   $dbname      = getenv('DB_NAME');
   $credentials = getenv('CREDENTIALS');

   $db = pg_connect( "$host $port $dbname $credentials");
   if(!$db) {
      die("Error : Unable to open database");
   }
   
?>