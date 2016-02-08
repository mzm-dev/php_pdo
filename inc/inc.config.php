<?php

/* 
 * PHP Sample
 * Collection of Basic programming using PHP and MySQL
 * @author 	: Mohamad Zaki Mustafa
 * @contact 	: mohdzaki04@gmail.com
 * @fb	 	: https://www.facebook.com/zakimedia
 * @tw	 	: https://twitter.com/mzmfizaki
 */

/*
 * @name Dbconfig file
 * @description Set the credentials for the database and make a new PDO connection 
 *              if the connection fails display the error.
 */

/**
 * Set Setting 
 */
$this->dbHost = "localhost";
$this->dbUser = "root";
$this->dbPass = "password";
$this->dbName = "db_php_sample";


try {
    // Connections are established by creating instances of the PDO base class.    
    // http://php.net/manual/en/pdo.connections.php
    $dbCon = new PDO("mysql:host={$DB_host};dbname={$DB_name}", $DB_user, $DB_pass);
    $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}
