<?php
    require_once '../../models/Database.php';
    require_once '../../models/contact.php';

        if(isset($_POST['delete'])){
            $id= $_POST['id'];
            $dbcon = Database::getDb();
            $contact = new Contact();
            $count = $contact->deleteContact($id, $dbcon);

            if($count){
                header("Location: ../../contactAdmin.php");
            }
        }