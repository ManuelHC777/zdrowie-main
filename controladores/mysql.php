<?php
Class mysql
{


    public static function connect()
    {
        $user = "root";
        $host = "localhost";
        $pass = "";
        $db= "dbzidrowiesystem";
        $conn = mysqli_connect($host, $user, $pass, $db);
        return $conn;
    }
    public static function close($conn)
    {
        mysqli_close($conn);
    }
}
