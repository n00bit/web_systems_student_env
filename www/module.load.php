<?php
//require_once'../class.connection.php';


Class Loader
{
    private static $_instance = null;

    private function __construct(){}

    private function __clone(){}

    private function __wakeup(){}

    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new Loader();
        }
        return self::$_instance;
    }

    public function load_all_modules()
    {
        $this->includeFunc(glob("application/core/*.php"));
        $this->includeFunc(glob("application/core/libs/system/db/*.php"));
        $this->includeFunc(glob("application/core/libs/system/user/*.php"));
        $this->includeFunc(glob("application/modules/*/controller/*.php"));
        $this->includeFunc(glob("application/modules/*/routes_collection.php"));
        $this->includeFunc(glob("application/modules/*/model/*.php"));
        $this->includeFunc(glob("application/modules/*/view/*.php"));
    }

    private function includeFunc($pattern){
        if(!is_array($pattern))
        {
           throw new Exception("It's not array!");
        }
        foreach ($pattern as $filename) {
            include_once $filename;
            print_r ($filename);
            print '<br>';

        }
    }

}
