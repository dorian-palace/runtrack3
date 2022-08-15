<?php
require_once('Db.php');

class Task
{
    public function __construct()
    {
        $this->db = new DB_connet();
        $this->db = $this->db->return_db();
    }
}
