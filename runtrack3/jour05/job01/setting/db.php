<?php

class DB_connet
{

    private $db;

    public function __construct()
    {
        try {
            $username = 'root';
            $password = 'root';

            $this->db = new PDO('mysql:host=localhost; dbname=utilisateurs', $username, $password);
            $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'erreur :' . $e->getMessage();
        }
    }

    public function return_db()
    {
        return $this->db;
    }
}
