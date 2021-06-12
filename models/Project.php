<?php
namespace Portfolio\models;
use PDO;

class Project {
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
    
    public function getAllProjects() {
        $sql = "SELECT * FROM projects";

        $pdostm = $this->db->prepare($sql);

        $pdostm->execute();

        $result = $pdostm->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }
}