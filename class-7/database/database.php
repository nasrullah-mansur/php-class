<?php

define('DB_NAME', 'corporate');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_HOSTNAME', 'localhost');

$conn = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($conn->connect_errno) {
    return "Failed to connect MySQL" . $conn->connect_errno;
    exit();
}

class DB 
{
    public static $table;

    public static function table($table)
    {
        self::$table = $table;
        return new self($table);
    }


    public function all()
    {
        global $conn;
        $table_name = self::$table;
        $sql = "SELECT * FROM $table_name";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $result;
    }


    public function first()
    {
        global $conn;
        $table_name = self::$table;
        $sql = "SELECT * FROM $table_name";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();
        return $result;
    }

    public function last()
    {
        global $conn;
        $table_name = self::$table;
        $sql = "SELECT * FROM $table_name ORDER BY id DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();
        return $result;
    }



    public function where($col_name, $operator, $value)
    {
        global $conn;
        $col_name = $col_name;
        $operator = $operator;
        $value = $value;
        $table_name = self::$table;
        $sql = "SELECT * FROM $table_name WHERE $col_name $operator $value";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $result;
    }


    public function insert($form_val)
    {
        global $conn;
        $array_keys = array_keys($form_val);
        $array_values = array_values($form_val);
        $col_name = implode(", ", $array_keys);
        $col_val = implode("', '", $array_values);
        $table_name = self::$table;
        $sql = "INSERT INTO $table_name ($col_name) VALUES ('$col_val')";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }


    public function update($id, $form_val)
    {
        // return $form_val;
        global $conn;
        $table_name = self::$table;
        $arr = array();
        foreach($form_val as $key => $value) {
            array_push($arr, "$key = '$value'");
        }
        $output = implode(', ', $arr);
        $sql = "UPDATE $table_name SET $output WHERE id=$id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }

    















    
}


