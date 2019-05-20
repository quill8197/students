<?php
/**
 * Created by PhpStorm.
 * User: quill
 * Date: 5/20/2019
 * Time: 1:31 PM
 */

//Turn on error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);

require '/home/smcconne/config.php';

// Require autoload file
require_once ('vendor/autoload.php');

// Create an instance of the base class
$f3 = Base::instance();

// Turn on Fat-free error reporting
$f3->set('DEBUG', 3);

// Connect to the database
try
{
    // Instantiate a new database
    $dbh = new PDO(DB_DSN,DB_USERNAME, DB_PASSWORD);
    //echo 'Connected to database!!';
}
catch (PDOException $e)
{
    echo $e->getMessage();
    return; //end the script
}

//Define a default route
$f3->route('GET /', function()
{
    echo 'hi';
});