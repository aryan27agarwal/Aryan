<?php
   $host        = getenv('HOST');
   $port        = getenv('DB_PORT');
   $dbname      = getenv('DB_NAME');
   $credentials = getenv('CREDENTIALS');

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
   
//    $sql =<<<EOF
//       CREATE TABLE users
//       (ID SERIAL PRIMARY KEY     NOT NULL,
//       NAME           TEXT    NOT NULL,
//       EMAIL          VARCHAR(100) NOT NULL,
//       AGE            INT     NOT NULL,
//       ADDRESS        CHAR(50),
//       SALARY         REAL);
// EOF;
   $sql =<<<EOF
      DROP Table users;
EOF;

   $ret = pg_query($db, $sql);
   if(!$ret) {
      echo pg_last_error($db);
   } else {
      echo "Records created successfully\n";
   }
   pg_close($db);
?>