<?php

    require_once '../../models/Database.php';
    require_once '../../models/career.php';

    if(isset($_POST['delete'])){
        $id = $_POST['id'];
        $db = Database::getDb();
        $career = new Career();
        $count = $career->deleteCareer($id, $db);

        if($count){
            header("Location: ../../careerAdmin.php");
        }
    }