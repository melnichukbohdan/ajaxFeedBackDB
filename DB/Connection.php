<?php

class Connection
{

private $db;

    public static function make()
    {
        return new PDO("mysql:host=localhost;dbname=ajaxphp", 'root', '');

    }

}