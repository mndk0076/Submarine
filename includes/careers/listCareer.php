<?php
    require_once './models/Database.php';
    require_once './models/career.php';

    $dbcon = Database::getDb();
    $career = new Career();
    $myCareers = $career->getAllCareers(Database::getDb());

    foreach($myCareers as $list){
        echo  "<tr>" .
        "<td> $list->id </td>" .
        "<td> $list->firstname </td>" .
        "<td> $list->lastname </td>" .
        "<td> $list->email </td>" .
        "<td> $list->phone </td>" .
        "<td> $list->degree </td>" .
        "<td> $list->institution </td>" .
        "<td> $list->formerEmployer </td>" .
        "<td> $list->resume </td>" .
        "<td>" .
            "<form action='includes/careers/updateCareer.php' method='post'>" . 
                "<input type='hidden' value='$list->id' name='id' />" . 
                "<input type='submit' value='Update' name='update' />" .
            "</form>" .
        "</td>" .
        "<td>" .
            "<form action='includes/careers/deleteCareer.php' method='post'>" . 
                "<input type='hidden' value='$list->id' name='id' />" . 
                "<input type='submit' value='Delete' name='delete' />" . 
            "</form>" . 
        "</td>" .
    "</tr>";
    }