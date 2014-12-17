<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 14.12.2014
 * Time: 3:19
 */
Class StaffViewer{

    public function showPersonalData($score){//вывод персональных данных пользователя
        print "WELCOME TO YOUR WORKPLACE!";
        print "Your score:";
        var_dump($score);
    }

    public function showAllMesseges($messeges){//построение интерфейса
        foreach($messeges as $type => $subset){
            echo ("<h4>$type</h4>
<table><tr><td>№</td><td>ТЕКСТ</td><td>ДАТА</td><td> ФИО АДРЕСАНТА'</td></tr></table>");
            foreach ($subset as $index => $value) {//Построение "интерфейса" персонажа
                echo("
<table>
    <td>Дата: $value[date]</td>
    <td>ФИО:$value[name]</td>
    <td>$value[surname]</td>
    <td>$value[pathronimic]</td></tr>
    $index Текст сообщения: $value[text]
</table>");
            }
        }
    }

    public function showWriteFormMessege(){//построение интерфейса
        echo ("
 <form method='POST' action='message'>
        <h3>Введите текст сообщение</h3>
        <input type = 'text' placeholder = 'Введите ваше сообсщение' name='text'>
        <input type ='submit'>
</form>
        ");//Шапка
    }

    public function showAllTickets($tickets){//показать рабочую инфорамцию(ТИКЕТЫ)
        echo ('№|ТЕМА | ФИО АБОНЕНТА | ДЕЙСТВИЯ');//Шапка
        foreach($tickets as $index=>$value){//Построение "интерфейса" персонажа
            echo ("
                <table>
                <form method='POST' action='message_box'>
                    <tr><td>$index</td><td>$value[topic]</td><td>|$value[name]</td><td>$value[surname]</td><td>$value[pathronimic]</td>
                    <td> <button value=$index name='showMesseges'>ПОКАЗАТЬ ВСЕ СООБЩЕНИЯ</button></td>
                    <td> <button value=$index name='newMessege'>НАПИСАТЬ СООБЩЕНИЕ</button></td>
                    <td> <button value=$index name='CloseTicket'>ЗАКРЫТЬ ТИКЕТ</button></tr></td>
                </form>
                </table>");
        }//кнопки и текст "интерфейса"
    }


}