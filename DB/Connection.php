<?php

class Connection
{

    //create object PDO
    public static function make()
    {
        return new PDO("mysql:host=localhost;dbname=ajaxphp", 'root', '');

    }

}