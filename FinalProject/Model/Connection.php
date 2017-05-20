<?php
abstract class game {
  private static $server = 'localhost';
  private static $db = 'game';
  private static $user = 'root';
  private static $password = 'root';

  public static function conect() {
    try {
      $connection = new PDO("mysql:host=".self::$server.";dbname=".self::$db.";charset=utf8", self::$user, self::$password);
    } catch (PDOException $e) {
      echo "No connect with database<br>";
      die ("Error: " . $e->getMessage());
    }
 
    return $connection;
  }
}