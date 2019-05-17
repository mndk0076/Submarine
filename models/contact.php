<?php

class Contact
{
    public function getContactById($id, $db){
        $sql = "SELECT * FROM contacts WHERE id = :id";
        $pdost = $db->prepare($sql);
        $pdost->bindParam(':id', $id);
        $pdost->execute();
        $count= $pdost->fetch(PDO::FETCH_OBJ);
        return $count; 
    }

    public function getAllContacts($dbcon){
        $sql = "SELECT * FROM contacts"; 
        $pdost = $dbcon->prepare($sql);
        $pdost->execute();
        $count = $pdost->fetchAll(PDO::FETCH_OBJ);
        return $count;
    }

    public function addContact($names, $phones, $emails, $comments, $db){
        $sql = "INSERT INTO contacts (names, phones, emails, comments)
                VALUES (:names, :phones, :emails, :comments)";
        $pdost = $db->prepare($sql);
        $pdost->bindParam(':names',$names);
        $pdost->bindParam(':phones',$phones);
        $pdost->bindParam(':emails',$emails);
        $pdost->bindParam(':comments',$comments);
        $count = $pdost->execute();
        return $count;
    }

    public function deleteContact($id, $db){
        $sql = "DELETE FROM contacts WHERE id = :id";
        $pdost = $db->prepare($sql);
        $pdost->bindParam(':id', $id);
        $count = $pdost->execute();
        return $count;
    }

    public function updateContact($id, $names, $phones, $emails, $comments, $db){
        $sql = "UPDATE contacts SET names = :names, phones = :phones, 
                emails = :emails, comments = :comments WHERE id = :id";
        $pdost = $db->prepare($sql);
        $pdost->bindParam(':id', $id);
        $pdost->bindParam(':names', $names);
        $pdost->bindParam(':phones', $phones );
        $pdost->bindParam(':emails', $emails);
        $pdost->bindParam(':comments', $comments);
        $count = $pdost->execute();
        return $count; 
    }
}