
<?php
/**
 * Created by PhpStorm.
 * User: quill
 * Date: 5/20/2019
 * Time: 1:31 PM
 */

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require autoload file
require_once('vendor/autoload.php');

// Create an instance of the base class
$f3 = Base::instance();

$db = new Database();

// Define a default route
$f3->route('GET /', function($f3)
{
    global $db;
    $students = $db->getStudents();

    $f3->set('students', $students);
    $template = new Template();
    echo $template->render('views/all-students.html');
});

// Run fat-free
$f3->run();