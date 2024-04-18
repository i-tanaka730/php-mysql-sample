<?php

$dbname = "sampledb";
$host = "mysql";
$port = "3306";

$dsn = "mysql:dbname=$dbname; host=$host; port=$port";
$user = 'root';
$password = 'pass';

try {
  $dbh = new PDO($dsn, $user, $password);
  echo "接続成功\n";
} catch (PDOException $e) {
  echo "接続失敗: " . $e->getMessage() . "\n";
  exit();
}

echo 'test';

?>