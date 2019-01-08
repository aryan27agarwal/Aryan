<?php

define('DATABASE_URL', getenv('DATABASE_URL'));
$db_url = parse_url(DATABASE_URL);

define('DB_HOST', $db_url['host']);
define('DB_USER', $db_url['user']);
define('DB_PASSWD', $db_url['pass']);
define('DB_PORT', $db_url['port']);
define('DB_NAME', substr($db_url['path'], 1));

define('POSTGRES_DSN', sprintf('pgsql:host=%s;dbname=%s;port=%s', DB_HOST, DB_NAME, DB_PORT));

class Database {
    private $pdo;

    public function __construct() {
        $this->$pdo = new PDO(POSTGRES_DSN, DB_USER, DB_PASSWD, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_PERSISTENT => true
        ]);
    }

    public function query($query, $data) {
        $stmt = $this->$pdo->prepare($query)->execute($data);
        // the returned value can be traversed like fetch()
        return $stmt;
    }
}