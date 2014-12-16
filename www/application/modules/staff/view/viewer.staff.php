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


    public function showAllTickets($tickets){//показать рабочую инфорамцию(ТИКЕТЫ)
        echo ('№|ТЕМА | ФИО АБОНЕНТА | ДЕЙСТВИЯ');//Шапка
        foreach($tickets as $index=>$value){//Построение "интерфейса" персонажа
            echo ("
                <table>
                <form method='POST'>
                    <tr><td>$index</td><td>$value[topic]</td><td>|$value[name]</td><td>$value[surname]</td><td>$value[pathronimic]</td>
                    <td> <button value=$index name='showMesseges'>ПОКАЗАТЬ ВСЕ СООБЩЕНИЯ</button></td>
                    <td> <button value=$index name='newMessege'>НАПИСАТЬ СООБЩЕНИЕ</button></td>
                    <td> <button value=$index name='CloseTicket'>ЗАКРЫТЬ ТИКЕТ</button></tr></td>
                </form>
                </table>");
        }//кнопки и текст "интерфейса"
    }


}