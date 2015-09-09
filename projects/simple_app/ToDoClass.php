<?php
require "../conn.php";

class ToDo {
  static public $conn;

  function __construct($conn) {
    ToDo::$conn = $conn;
  }

  static function addItem($item) {
    $sql = "INSERT INTO todo (item) VALUES ('" .
  							$item . "')";
  	ToDo::$conn->query($sql);
    return true;
  }

  static function getItems() {
    $sql = "SELECT * ,
            DATE_FORMAT(date_time, '%b %d, %Y') as date_time
            FROM todo";
    $result = ToDo::$conn->query($sql);
    return $result;
  }

  static function updateItem($id, $item) {
    $sql = "UPDATE todo
            SET item='$item' WHERE tid = $id";
    $result = ToDo::$conn->query($sql);
    return $result;
  }

  static function deleteItem($id) {
    $sql = "DELETE from todo WHERE tid = $id";
    $result = ToDo::$conn->query($sql);
    return $result;
  }
}

//initialize
$td = new ToDo($conn);
