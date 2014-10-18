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

## Установка Vagrant HostsUpdater

После установки Vagrant выполните в консоле команду

`$ vagrant plugin install vagrant-hostsupdater`


## Подробное описание установки и конфигурирования необходимого ПО

[Как я перестал мучиться с настройками веб сервера и полюбил виртуалки] (https://docs.google.com/document/d/1hw6DfpxmV_E8oW_6w98TeqOhTFV0LUdv9yi-bk1qQjw/edit#heading=h.jnfv3ican53l)

# Обновление базового образа Vagrant

В определенных случаях необходимо преподаватель будет выкладывать новую версию базового образа.
Например в ситуации когда для дальнейшей работы студентов потребуется дополнительный софт.

Для обновления базового образа виртуалки, необходимо выполнить следующее

- Принять [Pull Request] (https://help.github.com/articles/merging-a-pull-request/) сделаный преподавателем в ваш репозиторий.
- `$ git pull` - Или любой другой способ забрать последную версию кода
- `$ vagrant destroy` - уничтожение текущей виртуалки. ВНИМАНИЕ: все данные в БД будут потеряны. Если нужно сделайте предварительно дамп БД.
- `$ vagrant box remove webdeb` - Удаление текущего базового образа
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


