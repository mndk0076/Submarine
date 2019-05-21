<?php

class Career
{
    public function getCareerbyId($id, $db){ //for update
        $sql =  "SELECT * FROM careers where id=:id";
        $pdost = $db->prepare($sql);
        $pdost->bindParam(":id", $id);
        $pdost->execute();
        $career = $pdost->fetch(PDO::FETCH_OBJ);
        return $career;
    }//this function allows specific career ids to be targeted for updating 

    public function getAllCareers($dbcon){
        $sql = "SELECT * FROM careers";
        $pdost = $dbcon->prepare($sql);
        $pdost->execute();
        $careers = $pdost->fetchAll(PDO::FETCH_OBJ);
        return $careers;
    }
    //this function is for listing careers on the admin page

    public function addCareer($fname, $lname, $email, $phone, $degree, $education, $formerEmployer, $resume, $db){
        $sql = "INSERT INTO careers (firstname, lastname, email, phone, degree, institution, formerEmployer, resume)  
                VALUES(:firstname, :lastname, :email, :phone, :degree, :institution, :formerEmployer, :resume)";
        $pdost = $db->prepare($sql);
        $pdost->bindParam(':firstname', $fname);
        $pdost->bindParam(':lastname', $lname);
        $pdost->bindParam(':email', $email);
        $pdost->bindParam(':phone', $phone);
        $pdost->bindParam(':degree', $degree);
        $pdost->bindParam(':institution', $education);
        $pdost->bindParam(':formerEmployer', $formerEmployer);
        $pdost->bindParam(':resume', $resume);
        
        $count = $pdost->execute();
        return $count;
    }//this function inserts binded parameters into the database

    public function deleteCareer($id, $db){
        $sql = "DELETE FROM careers WHERE id = :id";
        $pdost = $db->prepare($sql);
        $pdost->bindParam(':id', $id);
        $count = $pdost->execute();
        return $count;
    }

    public function updateCareer($id, $fname, $lname, $email, $phone, 
    $degree, $education, $formerEmployer, $resume, $db){
        $sql = "UPDATE careers SET firstname = :firstname, lastname = :lastname, email =  :email,
         phone = :phone, degree = :degree, institution = :institution, formerEmployer = :formerEmployer, resume = :resume
         WHERE id = :id";

         $pdost = $db->prepare($sql);
         $pdost->bindParam(':id', $id);
         $pdost->bindParam(':firstname', $fname);
         $pdost->bindParam(':lastname', $lname);
         $pdost->bindParam(':email', $email);
         $pdost->bindParam(':phone', $phone);
         $pdost->bindParam(':degree', $degree);
         $pdost->bindParam(':institution', $education);
         $pdost->bindParam(':formerEmployer', $formerEmployer);
         $pdost->bindParam(':resume', $resume);

         $count = $pdost->execute();
         return $count;
    }// this function updates the database using binded parameters
}