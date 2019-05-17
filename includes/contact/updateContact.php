<?php
    require_once '../../models/Database.php';
    require_once '../../models/contact.php';


        if(isset($_POST['update'])){
            $id = $_POST['id'];

            $db = Database::getDb();
            $contact = New Contact();
            $updContact = $contact->getContactById($id, $db);
            $names = $updContact->names;
            $phones = $updContact->phones;
            $emails = $updContact->emails;
            $comments = $updContact->comments;
        }


        if(isset($_POST['updCon'])){
            $id = $_POST['conid'];
            $names = $_POST['names'];
            $phones = $_POST['phones'];
            $emails = $_POST['emails'];
            $comments = $_POST['comments'];

            if($names == ""){
                echo "Please Enter the Desired Field";
            }elseif($phones == ""){
                echo "Please Enter the Desired Field";
            }elseif($emails == ""){
                echo "Please Enter the Desired Field";
            }elseif($comments == ""){
                echo "Please Enter the Desired Field";
            }else{
                $db = Database::getDb();
                $contact = new Contact();
                $count = $contact->updateContact($id, $names, $phones, $emails, $comments, $db);

                if($count){
                    header("Location: ../../contactAdmin.php"); 
                }else{
                    echo "problem updating";
                }
            }
        }
?>


<form id="contactform" action="" method="post">
<input type="hidden" name="conid" value="<?= $updContact->id; ?>" />
    <div id="contactinfofirst">
        <span>
            <label for="name">Name:</label>
            <input type="text" id="name" name ="names" value="<?= $updContact->names; ?>">
            <span id="nameErr"></span>
        </span>

        <span id="formmargin">
            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name ="phones" value="<?= $updContact->phones; ?>">
            <span id="phoneErr"></span>
        </span>

        <span>
            <label for="email">Email:</label>
            <input type="text" id="email" name ="emails" value="<?= $updContact->emails; ?>">
            <span id="emailErr"></span>
        </span>
    </div>
    <div id="contactinfosecond">
        <label for="comments">Comments:</label>
        <textarea rows="4" cols="50" id="myComment" name="comments" form="contactform" value="<?= $updContact->comments; ?>"></textarea>
        <span id="commentErr"></span>
    </div>
    <input type="submit" value="submit" name="updCon" id="submit">

</form>