<?php
    require_once './models/Database.php';
    require_once './models/contact.php';

    $nameErr = "";
    $phoneErr = "";
    $emailErr = "";
    $commentErr = "";
    $isValid = true;
    if(isset($_POST['addCon'])){
        $names = $_POST['names'];
        $phones = $_POST['phones'];
        $emails = $_POST['emails'];
        $comments = $_POST['comments'];

        if(empty($names)){
            $nameErr = " Please Enter Your Name";
            $isValid = false;
        }elseif(empty($phones)){
            $phoneErr = "Please Enter Your Phone Number";
            $isValid = false;
        }elseif(empty($emails)){
            $emailErr = "Please Enter Your Email";
            $isValid = false;
        }elseif(empty($comments)){
            $commentErr = "Please Enter Your Comment or Question";
            $isValid = false;
        }

        if($isValid){
            $db = Database::getDb();
            $contact = new Contact();
            $addContact = $contact->addContact($names, $phones, $emails, $comments, $db);

            if($addContact){
                echo " <p class='addCon'>Message Sent </p>";
            }else{
                echo "<p class='addCon'>Problem Sending Message </p>";
            }
        }   
    }

?>

<form id="contactform" action="" method="post">
    <div id="contactinfofirst">
        <span>
            <label id="labName" for="name">Name:</label>
            <input type="text" id="name" name ="names">
            <span id="nameErr" style="color:red;">
                <?php
                    if(isset($nameErr)){
                        echo $nameErr;
                    }
                ?>
            </span>
        </span>
        <span id="formmargin">
            <label id="labPhone" for="phone">Phone Number:</label>
            <input type="text" id="phone" name ="phones">
            <span id="phoneErr" style="color:red;">
                <?php
                    if(isset($phoneErr)){
                        echo $phoneErr;
                    }
                ?>
            </span>
        </span>
        <span>
            <label id="labEmail" for="email">Email:</label>
            <input type="text" id="email" name ="emails">
            <span id="emailErr" style="color:red;">
                <?php
                    if(isset($emailErr)){
                        echo $emailErr;
                    }
                ?>
            </span>
        </span>
    </div>
    <div id="contactinfosecond">
        <label for="comments">Comments:</label>
        <textarea rows="4" cols="50" id="myComment" name="comments" form="contactform"></textarea> 
        <span id="commentErr" style="color:red;">
            <?php
                if(isset($commentErr)){
                    echo $commentErr;
                }
            ?>
        </span>
    </div>
    <input type="submit" value="submit" name="addCon" id="submit">

</form>