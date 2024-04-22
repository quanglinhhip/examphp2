<?php
namespace App\Models;
class Teacher extends BaseModel{
    protected $table = "teacher";

    public function getListTeacher() {
    $sql = "SELECT * FROM $this->table";
    $this->setQuery($sql);
    return $this->loadAllRows();
}
    public function insertTeacher($id, $name, $email, $salary, $school){
        $sql = "INSERT INTO $this->table VALUES (?, ?, ?, ?, ?)";
        $this->setQuery($sql);
        return $this->execute([$id, $name, $email, $salary, $school]); 
    }

    public function deleteTeacher($id){
        $sql = "DELETE FROM $this->table WHERE id =?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}
    
?>