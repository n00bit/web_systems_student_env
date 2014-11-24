<?php
//require_once'../class.connection.php';


Class Loader
{
    public function load_all_modules()
    {
        foreach (glob("application/core/*.php") as $filename) {
            include_once $filename;
        }

        foreach (glob("application/modules/*/controller/*.php") as $filename) {
            include_once $filename;
        }
    }

}
