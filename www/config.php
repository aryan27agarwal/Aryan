<?php
   $host        = "host =ec2-79-125-4-96.eu-west-1.compute.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = dbdajc3n95dbui";
   $credentials = "user = ijvhkplbzjbmou password=ba39cb7907d0f563183391f6bfa85ad77ea80c085f7b6e86cc64c3aecadd8c59";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
   
   $sql =<<<EOF
      CREATE TABLE users
      (ID SERIAL PRIMARY KEY     NOT NULL,
      NAME           TEXT    NOT NULL,
      EMAIL          VARCHAR(100) NOT NULL,
      AGE            INT     NOT NULL,
      ADDRESS        CHAR(50),
      SALARY         REAL);
EOF;

   $ret = pg_query($db, $sql);
   if(!$ret) {
      echo pg_last_error($db);
   } else {
      echo "Table created successfully\n";
   }
   pg_close($db);
?>