<?php
    require_once '../../models/Database.php';
    require_once '../../models/career.php';

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $db = Database::getDb();
        $updCareer = new Career();
        $careerById = $updCareer->getCareerbyId($id, $db);
        $fname = $careerById->firstname;
        $lname = $careerById->lastname;
        $email = $careerById->email;
        $phone = $careerById->phone;
        $degree = $careerById->degree;
        $education = $careerById->institution;
        $formerEmployer = $careerById->formerEmployer;
        $resume = $careerById->resume;
    }

    if(isset($_POST['updCareer'])){
        $id = $_POST['cid'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $degree = $_POST['degree'];
        $education = $_POST['institution'];
        $formerEmployer = $_POST['formerEmployer'];
        $resume = $_POST['oldResume'];

        if(isset($_FILES['resume'])){   
            if($_FILES['resume']['error']==0 && !empty($_FILES['resume']['name']) )
            {
                $phone = $_POST['phone'];
                $phone = str_replace(' ', '-', $phone);
                $phone = preg_replace('/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/', '', $phone);

                $tmp_name = $_FILES['resume']['name'];
                @$extension = array_pop(explode('.', $tmp_name));
            

                $file = strtolower(time().'-'.$phone.'.'.$extension);
                
                $resume = $file;

                move_uploaded_file($_FILES['resume']['tmp_name'], __DIR__.'/../../otherImages/'.$resume); 
            
            }
        }
        if($resume == ""){
            $resume = $_POST['oldResume'];
        }

        if($fname == ""){
            echo "Please Enter the Desired Field";
        }elseif($lname == ""){
            echo "Please Enter the Desired Field";
        }elseif($email == ""){
            echo "Please Enter the Desired Field";
        }elseif($phone == ""){
            echo "Please Enter the Desired Field";
        }elseif($degree == ""){
            echo "Please Enter the Desired Field";
        }elseif($education == ""){
            echo "Please Enter the Desired Field";
        }elseif($formerEmployer == ""){
            echo "Please Enter the Desired Field";
        }else{
            $db = Database::getDb();
            $career = new Career();
            $count = $career->updateCareer($id, $fname, $lname, $email, $phone, 
            $degree, $education, $formerEmployer, $resume, $db);

            if($count){
                header("Location: ../../careerAdmin.php");
            }else{
                echo "problem updating";
            }
        }

    }
?>

<form action="" method="post" enctype="multipart/form-data">
<input type="hidden" name="cid" value="<?= $careerById->id; ?>" />
    <div id="about">
        <h2>About You</h2>
        <div id="fname" class="carInfo">
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" value="<?= $careerById->firstname; ?>" id="firstname">
            <span id="fnameErr"></span>
        </div>

        <div id="lname" class="carInfo">
            <label for="lastname">Last Name:</label>
            <input type="text" name="lastname" value="<?= $careerById->lastname; ?>" id="lastname">
            <span id="lnameErr"></span>
        </div>

        <div id="carEmail" class="carInfo">
            <label for="email">Email:</label>
            <input type="text" name="email" value="<?= $careerById->email; ?>" id="email">
            <span id="emailErr"></span>
        </div>

        <div id="carPhone" class="carInfo">
            <label for="phone">Phone Number:</label>
            <input type="text" name="phone" value="<?= $careerById->phone; ?>" id="phone">
            <span id="phoneErr"></span>
        </div>

        <div id="highestdeg" class="carInfo">
            <h2>Education</h2>
            <label for="highdeg">Highest Degree:</label>
            <input type="text" name="degree" value="<?= $careerById->degree; ?>" id="highdeg">
            <span id="degErr"></span>
        </div>

        <div id="carInstitution" class="carInfo">
            <label for="institution">University or Institution:</label>
            <input type="text" name="institution" value="<?= $careerById->institution; ?>" id="institution">
            <span id="instituErr"></span>
        </div>

        
        <div id="lateExperience" class="carInfo">
            <label for="lastemploy">Latest Employer/Company:</label>
            <input type="text" name="formerEmployer" value="<?= $careerById->formerEmployer; ?>" id="lastemploy">
            <span id="experErr"></span>
        </div>

        <div id="upload" class="carInfo">
            <input type="hidden" name="oldResume" value="<?= $careerById->resume; ?>"> 
            <label for="fileupload"> UpDate Your Résumé Here!</label>
            <input type="file" name="resume"  id="fileupload">
        </div>

        <input type="submit" name="updCareer" value="submit" id="submit">
    </div>
</form>