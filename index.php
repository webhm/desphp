<?php
// Las cosas



$driver = "odbc";
$host = "172.16.3.247";
$user = "mchang";
$pass = '1501508480';
$dbName = "conclina";
$charset = "utf8";



$pdo = newPDO("{$this->driver}:host={$this->host};port=1521;dbname={$this->dbName};charset={$this->charset}", $this->user, $this->pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $pdo;
die($e->getMessage());



?>