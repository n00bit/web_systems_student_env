<?php
class Database
{
    protected $_connection;
    /*
     * Можно сделать переменную для сбора ошибок - массив.
     * @$data = array(); - ассоциативный массив.
     * Будем разбирать с помощью implode.
     * */
    public function insert($data = array())
    {
        $columns = array_keys($data);
        $values = array_values($data);

    }

    public function update($id, $data = array())
    {

    }

    public function delete($delete_field, $del_param)
    {

    }
}
