<?php
require_once ('php_lib/MysqliDb.php');
$db = new MysqliDb (Array (
      'host' => 'localhost',
      'username' => 'root',
      'password' => '',
      'db'=> 'db_crm_casona',
      'port' => 3306,
      'prefix' => '',
      'charset' => 'utf8'));
?>
