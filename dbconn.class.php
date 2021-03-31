<?php
//db conn.class.php
class DBConn
{
    private static $conn;
    public static function Select($query)
    {
        $conn = self::OpenConnection();

        $queryResult = $conn->query($query);
        
        if ($conn->errno)
        { 
           printf("%d: %s",$conn->errno,$conn->error);
            exit;
        }
        
        while ($row = $queryResult->fetch_assoc())
        {
            $result[] = $row;
        }
        return isset ($result) ? $result : array();
    }
    private static function OpenConnection()
    {
      $conn = new mysqli("localhost","root","=======","my_app");
      return $conn;
    }
    private static function CloseConnection ()
    {
        self::$conn->close();
    }
}
?>