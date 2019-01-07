<?php

define('MYSQL_DATABASE_URL', getenv('MYSQL_DATABASE_URL'));
$db_url = parse_url(MYSQL_DATABASE_URL);

define('MYSQL_HOST', $db_url['host']);
define('MYSQL_USER', $db_url['user']);
define('MYSQL_PASSWD', $db_url['pass']);
define('MYSQL_PORT', $db_url['port']);
define('MYSQL_DB', substr($db_url['path'], 1));

define('MYSQL_DSN', sprintf('mysql:host=%s;dbname=%s;port=%s;charset=utf8', MYSQL_HOST, MYSQL_DB, MYSQL_PORT));

class Database {
    private $pdo;

    public function __construct() {
        $pdo = new PDO(MYSQL_DSN, MYSQL_USER, MYSQL_PASSWD, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_PERSISTENT => true
        ]);
    }

    public function query($query, $data) {
        $stmt = $pdo->prepare($query)->execute($data);
        // the returned value can be traversed like fetch()
        return $stmt;
    }
}