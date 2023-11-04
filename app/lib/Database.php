<?php
namespace Lordar221617\Portfolio;

use Exception;
use PDO;
use PDOException;

class Database
{
    private static $pdo;

    public function __construct()
    {
        self::connect();
    }

    private static function connect()
    {
        try {
            self::$pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4", DB_USER, DB_PASS);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch (Exception | PDOException $e) {
            if (APP_DEBUG) {
                setCookie("message", "Connection failed");
                echo sprintf("Connection failed ;Error Message: %s", $e->getMessage());
            }
        }
    }

    public static function disconnect()
    {
        try {
            self::$pdo = null;
        } catch (Exception | PDOException $e) {
            if (APP_DEBUG) {
                setCookie("message", "Error in Database;");
                echo sprintf("Error ;Error Message: %s", $e->getMessage());
            }
        }
    }

    public function selectAll($table)
    {
        try {
            $table = DB_PRE . $table;
            $query = "SELECT * FROM $table";
            $stmt = self::$pdo->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (Exception | PDOException $e) {
            if (APP_DEBUG) {
                setCookie("message", "Error in Database;");
                echo sprintf("Error ;Error Message: %s", $e->getMessage());
            }
        }
    }

    public function selectById($table, $id)
    {
        try {
            $table = DB_PRE . $table;
            $query = "SELECT * FROM `$table` WHERE `id` = ?";
            $stmt = self::$pdo->prepare($query);
            $stmt->execute([$id]);
            return $stmt->fetch();
        } catch (Exception | PDOException $e) {
            if (APP_DEBUG) {
                setCookie("message", "Error in Database;");
                echo sprintf("Error ;Error Message: %s", $e->getMessage());
            }
        }
    }

    public function custom_select($table, $selector)
    {
        try {
            $table = DB_PRE . $table;
            $query = "SELECT * FROM `$table`";
            $val = [];
            if (count($selector) > 0) {
                $query .= " WHERE ";
                foreach ($selector as $select => $value) {
                    $query .= sprintf(" `%s`%s ? ", $select, $value[0]);
                    $val[] = $value[1];
                }
            }
            $stmt = self::$pdo->prepare($query);
            $stmt->execute($val);
            $fetch = $stmt->fetch();
            return empty($fetch) ? "" : $fetch;
        } catch (Exception | PDOException $e) {
            if (APP_DEBUG) {
                setCookie("message", "Error in Database;");
                echo sprintf("Error ;Error Message: %s", $e->getMessage());
            }
        }
    }

    public function insert($table, $data)
    {
        try {
            $table = DB_PRE . $table;
            $placeholders = rtrim(str_repeat('?,', count($data)), ',');
            $fields = implode(",", array_keys($data));
            $query = "INSERT INTO $table ($fields) VALUES ($placeholders)";
            $stmt = self::$pdo->prepare($query);
            $stmt->execute(array_values($data));
        } catch (Exception | PDOException $e) {
            if (APP_DEBUG) {
                setCookie("message", "Error in Database;");
                echo sprintf("Error ;Error Message: %s", $e->getMessage());
            }
        }
    }

    public function updateById($table, $id, $data)
    {
        try {
            $table = DB_PRE . $table;
            $placeholders = '';
            $count = count($data);
            $keys = array_keys($data);

            for ($i = 0; $i < $count; $i++) {
                $placeholders .= $keys[$i] . " = ?";
                if ($i !== $count - 1) {
                    $placeholders .= ', ';
                }
            }

            $query = "UPDATE $table SET $placeholders WHERE id = $id";
            $stmt = self::$pdo->prepare($query);
            $stmt->execute(array_values($data));
        } catch (Exception | PDOException $e) {
            if (APP_DEBUG) {
                setCookie("message", "Error in Database;");
                echo sprintf("Error ;Error Message: %s", $e->getMessage());
            }
        }
    }

    public function deleteById($table, $id)
    {
        try {
            $table = DB_PRE . $table;
            $query = "DELETE FROM $table WHERE id = ?";
            $stmt = self::$pdo->prepare($query);
            $stmt->execute([$id]);
        } catch (Exception | PDOException $e) {
            if (APP_DEBUG) {
                setCookie("message", "Error in Database;");
                echo sprintf("Error ;Error Message: %s", $e->getMessage());
            }
        }
    }
}