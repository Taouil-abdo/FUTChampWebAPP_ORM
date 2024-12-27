<?php


class Database {
    private static $ServerName = 'localhost';
    private static $UserName = 'root';
    private static $PassWord = '';
    private static $DbName = 'futchamp';

    private static $conn;




  public static function conection(){

    self::$conn = new PDO(self::$ServerName,self::$UserName,self::$PassWord,self::$DbName);
    if(self::$conn){
    return self::$conn;
    }

  }

  public static function insert($table, $columns, $values) {
    $query = "INSERT INTO $table ($columns) VALUES ($values)";
    $result = self::conection()->query($query);
    return $result; 
}

  public static function select($table){
      $query = "SELECT * FROM $table";
      $result = self::conection()->query($query);
      return $result;
  }


  public static function delete($table,$id){
      $query = "DELETE FROM $table WHERE id=$id";
      $result = Database::conection()->query($query);
      return $result;

  }

  public static function getId($table,$id){

    $query = "SELECT id FROM $table where id=$id";
    $result = self::conection()->query($query);
    return $result;

  }

  public static function update($table,$columns, $id){
    // $columns = rtrim($columns, ',');
    $query = "UPDATE $table SET $columns WHERE id=$id";
    $result = self::conection()->query($query);
    return $result;


  }


}

