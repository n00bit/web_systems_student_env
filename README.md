Web systems student environment
=======================

Конфигурация Vagrant для курса "Web технологии" ОмГТУ кафедра ИВТ.

# Coстав

- [Nginx] (http://nginx.org/)
- [PHP-FPM] (http://php-fpm.org/)
- [MySQL] (http://www.mysql.com/)
- [PostgreSQL] (http://www.postgresql.org/)
- [PhpMyAdmin] (http://www.phpmyadmin.net/)
- [PhpPgAdmin] (http://phppgadmin.sourceforge.net/)
- [Phinx] (http://phinx.org/)
- [Phing] (http://www.phing.info/)
- [Composer] (https://getcomposer.org/)

# Необходимое ПО

- [VirtualBox] (https://www.virtualbox.org/) 
- [Vagrant] (https://www.vagrantup.com/) Рекомендуемая версия 1.4.0 работает стабильно. 
- Vagrant hosts updater
- Vagrant Vbox Guest edition

## Установка Vagrant HostsUpdater

После установки Vagrant выполните в консоле команду

`$ vagrant plugin install vagrant-hostsupdater`



## Установка Vagrant Vbox Guest edition

После установки Vagrant выполните в консоле команду

`$ vagrant plugin install vagrant-vbguest`

## Подробное описание установки и конфигурирования необходимого ПО

[Как я перестал мучиться с настройками веб сервера и полюбил виртуалки] (https://docs.google.com/document/d/1hw6DfpxmV_E8oW_6w98TeqOhTFV0LUdv9yi-bk1qQjw/edit#heading=h.jnfv3ican53l)

# Обновление базового образа Vagrant

В определенных случаях необходимо преподаватель будет выкладывать новую версию базового образа.
Например в ситуации когда для дальнейшей работы студентов потребуется дополнительный софт.

Для обновления базового образа виртуалки, необходимо выполнить следующее

- Принять [Pull Request] (https://help.github.com/articles/merging-a-pull-request/) сделаный преподавателем в ваш репозиторий.
- `$ git pull` - Или любой другой способ забрать последную версию кода
- `$ vagrant destroy` - уничтожение текущей виртуалки. ВНИМАНИЕ: все данные в БД будут потеряны. Если нужно сделайте предварительно дамп БД.
- `$ vagrant box remove webdb` - Удаление текущего базового образа
- `$ vagrant up` - Создание виртуалки. Vagrant сам скачает новую версию базового образа.
 
# Виртуальные хосты

- [PhpMyAdmin] (http://phpmyadmin.dev) http://phpmyadmin.dev User/Password: root/root
- [PhpPgAdmin] (http://phppgadmin.dev) http://phppgadmin.dev User/Password: postgres/root
- [Разрабатываемое приложение] (http://webdb.dev) http://webdb.dev/

# Инструменты разработчика

На виртуальной машине установлены вспомогательные инструменты для разработчика. 

## Подключение к ssh консоли виртуалки.

### Linux (последнии версии Vagrant поддерживают данный способ и для Windows)

`$ vagrant ssh`

### Windows 

- Установите [PUTTY] (http://putty.org.ru/)
- Следуя [документации] (http://novall.net/manual/instrukciya-kak-podklyuchitsya-po-ssh-k-serveru-s-pomoshhyu-putty.html) подключиться к серверу  

ip: 10.0.0.10 
User: vagrant 
Password: vagrant


## Создание таблиц, миграция и версионирование БД.

Для управлением версиями БД предлагается использовать [Phinx] (http://phinx.org)


### Создание миграции

Для создания новой миграции выполните команды на виртуалке

`$ cd /vagrant`
`$ ./phinx create {Migration name}`

{Migration name} должна быть в стиле [CamelCase] (https://ru.wikipedia.org/wiki/CamelCase) и уникальна в рамках миграций вашего проекта.
Просьба {Migration name} выбирать таким образом, что бы описать суть миграции.

Далее в папке migrations вы найдете файл с соотвествующим названием.
В нем будет класс с методом up. В этом методе описываете ваш код миграции.

Например 

`$ ./phinx create CreateUserTable`

```php
<?php

use Phinx\Migration\AbstractMigration;

class CreateUserTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     *
    public function change()
    {
    }
    */
    
    /**
     * Migrate Up.
     */
    public function up()
    {
    
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}
```

Добавляем SQL создания таблицы

```php
<?php

use Phinx\Migration\AbstractMigration;

class CreateUserTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     *
    public function change()
    {
    }
    */
    
    /**
     * Migrate Up.
     */
    public function up()
    {
      $sql = <<<SQL
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `teeeste` varchar(52) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
SQL;
      $this->execute($sql);      
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}
```

### Запуск миграций

Для выполнения миграции на вашей машине выполните в консоли виртуалки следующие команды.

`$ cd /vagrant`
`$ ./phinx migrate`


### Дополнительные ограничения

Phinx предоставляет API для описания изменений с БД.
Например [такое] (http://docs.phinx.org/en/latest/migrations.html#the-change-method)

В рамках данного проекта допускается использование только методов которые требуют в качестве входных данных SQL.

Например 

```php
        $count = $this->execute('DELETE FROM users'); // returns the number of affected rows
        $rows = $this->query('SELECT * FROM users'); // returns the result as an array
```

