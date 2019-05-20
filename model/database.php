<?php
/**
 * Database class
 * User: quill
 * Date: 5/20/2019
 * Time: 1:45
 */

class Database
{
    private $_dbh;

    function __construct()
    {
        $this->connect();
    }

    function connect()
    {
        try
        {
            define('DB_DSN', 'mysql:dbname=smcconne_it328');
            define('DB_USERNAME', 'smcconne_students');
            define('DB_PASSWORD', 'grc_user!');

            //Instantiate a new database
            $this->_dbh = new PDO(DB_DSN,DB_USERNAME, DB_PASSWORD);
            echo 'Connected to database!';
            return $this->_dbh;
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
            return; //end the script
        }
    }
}