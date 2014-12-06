<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 06.12.2014
 * Time: 0:35
 */
    Class Authorization{

        public function authorization(){
            print "What's up, dock?";
            if(preg_match('/[A-Za-z]+/', $_POST["login"]) !== 0) {
                $temp = new Staff();
                return;
            }
            else{
                return;
            }

        }

    }