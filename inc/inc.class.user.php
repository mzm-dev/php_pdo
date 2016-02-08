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
 * CRUD file for Table users
 * @name User
 * @description This is the main class file which contains code for database operations.
 *              so that we won't have to write the same header codes every-time. 
 *              This file contains bootstrap file links. 
 */

class User {

    private $db;

    /**
     * Construct
     * @param type $dbCon
     */
    function __construct($dbCon) {
        $this->db = $dbCon;
    }

    /**
     * Get All Data
     * Function selects the whole records from database table.
     * @param type $query
     * @return type
     * @url http://php.net/manual/en/pdostatement.fetchall.php
     * 
     */
    public function get_all_data() {
        $stmt = $this->db->prepare("SELECT * FROM users"); //SELECT <field1>, <field2> FROM <table>
        $stmt->execute();
        /* if result execute not empty */
        if ($stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        }
    }

    /**
     * Get Selected Data by @param
     * Function get the records from database table.
     * @param type $id
     * @return boolean
     * @url http://php.net/manual/en/pdostatement.fetch.php
     */
    //public function get_data($prepare, $execute = array()) {
    public function get_data($id = null) {
        if ($id) {
            $stmt = $this->db->prepare("SELECT * FROM users WHERE id=:id");
            $stmt->execute(array(":id" => $id));
            /* if result execute not empty */
            if ($stmt->rowCount() > 0) {
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                return $result;
            } else {
                return FALSE;
            }
        } else {
            
        }
    }

    /**
     * Save Function
     * Functions are in try/catch block to handle exceptions.
     * @param type $fname
     * @param type $femail
     * @param type $fphone
     * @return boolean
     * @ref http://php.net/manual/en/pdostatement.execute.php
     * @ref http://php.net/manual/en/pdostatement.bindparam.php
     */
    public function create($fname, $femail, $fphone) {
        try {
            $stmt = $this->db->prepare("INSERT INTO users(name,email,phone) VALUES(:name, :email, :phone)");
            $stmt->bindparam(":name", $fname);
            $stmt->bindparam(":email", $femail);
            $stmt->bindparam(":phone", $fphone);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

}
