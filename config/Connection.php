<?php

class connection {
    private static $ServerName = 'localhost';
    private static $UserName = 'root';
    private static $PassWord = '';
    private static $DbName = 'futchamp';

    private static $conn;

    public static function connection() {
        if (self::$conn === null) {
            try {
                self::$conn = new PDO("mysql:host=" . self::$ServerName . ";dbname=" . self::$DbName, self::$UserName, self::$PassWord);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Connection failed: " . $e->getMessage());
            }
        }
        return self::$conn;
    }

    public static function insert($table, $columns, $values) {
        $query = "INSERT INTO $table ($columns) VALUES ($values)";
        $stmt = self::connection()->prepare($query);
        return $stmt->execute();
    }

    public static function select($table) {
        $query = "SELECT * FROM $table";
        $stmt = self::connection()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function delete($table, $id) {
        $query = "DELETE FROM $table WHERE id = :id";
        $stmt = self::connection()->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public static function getId($table, $id) {
        $query = "SELECT id FROM $table WHERE id = :id";
        $stmt = self::connection()->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function update($table, $columns, $id) {
        $query = "UPDATE $table SET $columns WHERE id = :id";
        $stmt = self::connection()->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
