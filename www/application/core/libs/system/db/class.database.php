<?php

class Database
{
    static private $_instance;
    static private $_lastQuery = null;
    static public $_connection = null;


    private function __clone()
    {

    }

    private function __wakeup()
    {

    }

    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new Database();
        }
        return self::$_instance;
    }

    /**
     * Строит часть запроса, из полученного ассоциативного массива.
     * Пример:
     * $array = (
     *   'login' => 'admin',
     *   'pass' => '1',
     * );
     * // преобразует массив в строку: "'login' = 'admin', 'pass' = '1'"
     * Database::buildPartQuery($array);
     * </code>
     * $data ассоциативный массив полей с данными.
     * $devide разделитель.
     */
    public static function queryBuildPart($data, $devide = ',')
    {
        $partQuery = '';
        if (is_array($data)) {
            $partQuery = '';
            foreach ($data as $index => $value) {
                //$partQuery .= sprintf(' `%s` = "%s"'.$devide, $index, mysqli_real_escape_string(self::$connection, $value));
                $partQuery .= ' `' . self::quote($index, true) . '` = "' . self::quote($value, true) . '"' . $devide;
            }
            $partQuery = trim($partQuery, $devide);
            //$partQuery = str_replace("%", "%%", $partQuery);
        }
        return $partQuery;
    }

    /**
     * Аналогичен методу buildPartQuery, но используется для целого запроса.
     * $array ассоциативный массив.
     * $devide разделитель
     */
    public static function buildQuery($query, $data, $devide = ',')
    {

        if (is_array($data)) {
            $partQuery = '';

            foreach ($data as $index => $value) {
                //$partQuery .= sprintf(' `%s` = "%s"'.$devide, $index, mysqli_real_escape_string(self::$connection, $value));
                $partQuery .= ' `' . self::quote($index, true) . '` = "' . self::quote($value, true) . '"' . $devide;
            }

            $partQuery = trim($partQuery, $devide);
            $query .= $partQuery;

            return self::query($query);
        }
        return false;
    }


    /**
     * Возвращает запись в виде массива.
     */
    public static function fetchArray($object)
    {
        return @mysqli_fetch_array($object);
    }

    /**
     * Возвращает ряд результата запроса в качестве ассоциативного массива.
     */
    public static function fetchAssoc($object)
    {
        return @mysqli_fetch_assoc($object);
    }

    /**
     * Возвращает запись в виде объекта.
     */
    public static function fetchObject($object)
    {
        return @mysqli_fetch_object($object);
    }

    /**
     * Возвращает сгенерированный колонкой с AUTO_INCREMENT
     * последний запросом INSERT к серверу.
     */
    public static function insertId()
    {
        return @mysqli_insert_id(self::$_connection);
    }

    /**
     * Возвращает количество рядов результата запроса.
     */
    public static function numRows($object)
    {
        return @mysqli_num_rows($object);
    }

    /**
     * Выполняет запрос к БД.
     * $sql запрос.
     */
    public static function query($sql)
    {

        $obj = self::$_instance;

        if (isset(self::$_connection)) {
            $obj->count_sql++;
            $result = mysqli_query(self::$_connection, $sql) or die ('<p font-color:red;>' . mysqli_error(self::$_connection) . '</p>');
            self::$_lastQuery = $sql;
            return $result;
        }
        return false;
    }

    /**
     * Экранирует кавычки
     */
    public static function quote($sqlPart)
    {
        return "'" . mysqli_real_escape_string(self::$_connection, $sqlPart) . "'";
    }


    /*
     * Выводит последний выполненный запрос.
     */

    public static function lastQuery()
    {
        return self::$_lastQuery;
    }

}
