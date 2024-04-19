<?php

$dbname = "sampledb";
$host = "mysql";
$port = "3306";

$dsn = "mysql:dbname=$dbname; host=$host; port=$port";
$user = 'root';
$password = 'pass';

try {
  $pdo = new PDO($dsn, $user, $password);
  $slectSql = "select * from user where name = :name";
  $stmt = $pdo->prepare($slectSql);
  $name = "田中太郎";
  $params = array(':name' => $name);
  $stmt->execute($params);
  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  echo $result["name"] . "\n";
  echo $result["age"] . "\n";
} catch (PDOException $e) {
  echo "接続失敗: " . $e->getMessage() . "\n";
  exit();
}

?>