<?php
namespace Portfolio\models;
use PDO;

class Skill {
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
    
    public function getAllSkills() {
        $sql = "SELECT * FROM skills";

        $pdostm = $this->db->prepare($sql);

        $pdostm->execute();

        $result = $pdostm->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }
}