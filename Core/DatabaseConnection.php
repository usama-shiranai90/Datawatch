<?php
namespace App\Core;

use App\Config;
use PDO;
use PDOException;

class DatabaseConnection
{

  private static $connection = null;

  private function __construct()
  {
    die('Init function is not allowed');
  }

  public static function getConnection()
  {
    if (null == self::$connection) {
      $databaseName = Config::DB_NAME;
      $databaseHost = Config::DB_HOST;
      $databaseUser = Config::DB_USER;
      $databasePassword = Config::DB_PASSWORD;

      try {
//        self::$connection = new PDO("mysql:host=" . $databaseHost . ";" . "dbname=" . $databaseName, $databaseUser, $databasePassword, $config['options']);
        self::$connection = mysqli_connect($databaseHost,$databaseUser,$databasePassword,$databaseName);
      } catch (\mysqli_sql_exception $e) {
        die($e->getMessage());
      }

    }
    return self::$connection;
  }

  public static function disconnect()
  {
    self::$connection = null;
  }
}


?>
