<?php


Class AuthorDB{//класс взаимодейстивия с базой данных модуля Авторизации

    private $connection;

    public function  __construct(){//конструктор - установка соединения
        $this->connection = new Connection();
    }

    public function getID($table, $log_col){//Получить ID пользователя, сотрудника или бригады из БД
        $loader = $this->connection->getConnection();
        $login = $_POST['login'];//извлеч из массива логин
        $password = $_POST['password'];//ззвлеч из массива пароль
        $results = "SELECT id FROM $table WHERE $log_col='$login' AND password='$password'";
        $results=$loader->query($results);
        return $this->parseResult($results);//вернуть только ID
    }

    private function parseResult($result){//извлечение ID из результата запроса
        $local_result = mysqli_fetch_array($result);
        return $local_result[0];
    }


    public function endWork(){//разрыв соединения
        $this->connection->killConnection();
        $this->connection = null;
    }

}
