<?php
class Database
{



    // private static $dbName = 'erp' ;
    // private static $dbHost = '192.168.1.233' ;
    // private static $dbUsername = 'root';
    // private static $dbUserPassword = 'msroot';

    private static $conn  = null;

    public function __construct() {
        die('Init function is not allowed');
    }

    public static function connect()
    {
      $dbName = 'erp' ;
      $dbHost = 'localhost' ;
      $dbUsername = 'root';
      $dbUserPassword = 'msroot';

       $conn = mysqli_connect("$dbHost","$dbUsername","$dbUserPassword","$dbName");
       $conn->set_charset("utf8");

       // Check connection
       if (mysqli_connect_errno())
         {
         echo "Failed to connect to MySQL: " . mysqli_connect_error();
         }

       return self::$conn;
    }

    public static function disconnect()
    {
        self::$conn = null;
    }
}







?>
