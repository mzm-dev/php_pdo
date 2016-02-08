<?php

/* 
 * PHP PDO CRUD Tutorial 
 * In this tutorial we will see that how to create database 
 * CRUD operations using Object Oriented concept in PDO
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
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "password";
$dbName = "db_php_sample";


try {
    // Connections are established by creating instances of the PDO base class.    
    // http://php.net/manual/en/pdo.connections.php
    $dbCon = new PDO("mysql:host={$dbHost};dbname={$dbName}", $dbUser, $dbPass);
    $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}

include_once 'inc.class.user.php';

$crud = new Crud($dbCon);