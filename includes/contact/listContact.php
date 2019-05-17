<?php
    require_once './models/Database.php';
    require_once './models/contact.php';

    $dbcon = Database::getDb();
    $contact = new Contact();
    $listContact = $contact->getAllContacts(Database::getDb());


    foreach($listContact as $list){
        echo "<tr>" .
        "<td> $list->names </td>" .
        "<td> $list->phones </td>" .
        "<td> $list->emails </td>" .
        "<td> $list->comments </td>" .
        "<td>" .
            "<form action='includes/contact/updateContact.php' method='post'>" . 
                "<input type='hidden' value='$list->id' name='id' />" . 
                "<input type='submit' value='Update' name='update' />" .
            "</form>" .
        "</td>" .
        "<td>" .
            "<form action='includes/contact/deleteContact.php' method='post'>" . 
                "<input type='hidden' value='$list->id' name='id' />" . 
                "<input type='submit' value='Delete' name='delete' />" . 
            "</form>" . 
        "</td>" .
    "</tr>";
    }