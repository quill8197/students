<?php
/**
 * Database class
 * User: quill
 * Date: 5/20/2019
 * Time: 1:45
 */

require '/home/smcconne/config-student.php';

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
            //Instantiate a new database
            $this->_dbh = new PDO(DB_DSN,DB_USERNAME, DB_PASSWORD);
            return $this->_dbh;
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
            return; //end the script
        }
    }

    function getStudents()
    {
        // Define the query
        $sql = "SELECT * FROM student ORDER BY last, first";

        // Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        // Execute the statement
        $statement->execute();

        // Return the result
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}