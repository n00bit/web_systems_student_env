<?php
//require_once'../class.connection.php';


Class Loader
{
    public function load_all_modules()
    {
        $this->includeFunc(glob("application/core/*.php"));
        $this->includeFunc(glob("application/core/libs/*/*.php"));
        $this->includeFunc(glob("application/modules/*/controller/*.php"));
        $this->includeFunc(glob("application/modules/*/routes_collection.php"));
        $this->includeFunc(glob("application/modules/*/model/*.php"));
    }

    private function includeFunc($pattern){
        if(!is_array($pattern))
        {
           throw new Exception("It's not array!");
        }
        foreach ($pattern as $filename) {
            include_once $filename;
        }
    }
}
