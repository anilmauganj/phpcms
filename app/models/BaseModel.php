<?php
namespace App\Models;

use App\Config\Database;

class BaseModel
{
   protected $db;


    public function __construct() {
        $database = new Datbase();
        $this->db = $dabatase->conn;
    }

    //common helper: run select queries
    protected function query($sql) {
       return $this->db->query($sql);
    }

    //common helper: escape strings
    protected function escape($value) {
       return $this->db->real_escape_string($value);
    }

    
}