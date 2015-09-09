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

  static function updateItem($id) {
    $sql = "SELECT";
  }

  static function deleteItem($id) {
    $sql = "DELETE FROM todo WHERE tid = $id";
    ToDo::$conn->query($sql);

  }
}

// initialize a conn object
$td = new ToDo($conn);
