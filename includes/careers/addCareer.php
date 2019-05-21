<?php
    require_once './models/Database.php';
    require_once './models/career.php';

    $fnameErr = "";
    $lnameErr = "";
    $emailErr = "";
    $phoneErr = "";
    $degErr = "";
    $instituErr = "";
    $experErr = "";
    $isValid = true;
    $fname = $lname = $email = $phone = $degree = $education = $formerEmployer = "";

    if(isset($_POST['addCareer'])){
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $degree = $_POST['degree'];
        $education = $_POST['institution'];
        $formerEmployer = $_POST['formerEmployer'];
        $resume = "";
    
        //validation
        if(empty($fname)){
            $fnameErr = " Please Enter Your First Name";
            $isValid = false;
        }elseif(empty($lname)){
            $lnameErr = "Please Enter Your Last Name";
            $isValid = false;
        }elseif(empty($email)){
            $emailErr = "Please Enter Your Email";
            $isValid = false;
        }elseif(empty($phone)){
            $phoneErr = "Please Enter Your Phone Number";
            $isValid = false;
        }elseif(empty($degree)){
            $degErr = "Please Enter Your Highest Degree";
            $isValid = false;
        }elseif(empty($education)){
            $instituErr = "Please Enter Your Last Educational Institution";
            $isValid = false;
        }elseif(empty($formerEmployer)){
            $experErr = "Please Enter Your Last Employer";
            $isValid = false;
        }

        
        if(isset($_FILES['resume']))
        {   
            if($_FILES['resume']['error']==0)
            {
                $phone = $_POST['phone'];
                $phone = str_replace(' ', '-', $phone);
                $phone = preg_replace('/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/', '', $phone);

                $tmp_name = $_FILES['resume']['name'];
                @$extension = array_pop(explode('.', $tmp_name));

                $file = strtolower(time().'-'.$phone.'.'.$extension);
                
                $resume = $file;

                move_uploaded_file($_FILES['resume']['tmp_name'], __DIR__.'/../../otherimages/'.$resume); 
                /*if the resume field is populated and there are no errors, then the input from the phone 
                field is used to generate a new name for the file. Then the filr is moved to the images folder */
            }
        }

        if($isValid){
            $db = Database::getDb();
            $career = new Career();
            $addCar = $career->addCareer($fname, $lname, $email, $phone, $degree, $education, $formerEmployer, $resume, $db);

            if($addCar){
                echo "<p class='addCar'>Thanks</p>";
                include 'CareerConfirmEmail.php';
                confirmEmail($email);
                //this section includes the confirmation email code and uses the email input to send the email.
            }else{
                echo "<p class='addCar'>Problem Sending Application</p>";
            }
        }
    }

?>

<form action="" method="post" enctype="multipart/form-data">

    <div id="about">
        <h2>About You</h2>
        <div id="fname" class="carInfo">
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" id="firstname">
            <span id="fnameErr" style="color:red;">
            <?php
                if(isset($fnameErr)){
                    echo $fnameErr;
                }
            ?>
            </span>
        </div>

        <div id="lname" class="carInfo">
            <label for="lastname">Last Name:</label>
            <input type="text" name="lastname" id="lastname">
            <span id="lnameErr" style="color:red;">
                <?php
                    if(isset($lnameErr)){
                        echo $lnameErr;
                    }
                ?>
            </span>
        </div>

        <div id="carEmail" class="carInfo">
            <label for="email">Email:</label>
            <input type="text" name="email" id="email">
            <span id="emailErr" style="color:red;">
                <?php
                    if(isset($emailErr)){
                        echo $emailErr;
                    }
                ?>
            </span>
        </div>

        <div id="carPhone" class="carInfo">
            <label for="phone">Phone Number:</label>
            <input type="text" name="phone" id="phone">
            <span id="phoneErr" style="color:red;">
                <?php
                    if(isset($phoneErr)){
                        echo $phoneErr;
                    }
                ?>
            </span>
        </div>

        <div id="highestdeg" class="carInfo">
            <h2>Education</h2>
            <label for="highdeg">Highest Degree:</label>
            <input type="text" name="degree" id="highdeg">
            <span id="degErr" style="color:red;">
                <?php
                    if(isset($degErr)){
                        echo $degErr;
                    }
                ?>     
            </span>
        </div>

        <div id="carInstitution" class="carInfo">
            <label for="institution">University or Institution:</label>
            <input type="text" name="institution" id="institution">
            <span id="instituErr" style="color:red;">
                <?php
                    if(isset($instituErr)){
                        echo $instituErr;
                    }
                ?>   
            </span>
        </div>

        
        <div id="lateExperience" class="carInfo">
            <label for="lastemploy">Latest Employer/Company:</label>
            <input type="text" name="formerEmployer" id="lastemploy">
            <span id="experErr" style="color:red;">
                <?php
                    if(isset($experErr)){
                        echo $experErr;
                    }
                ?>     
            </span>
        </div>

        <div id="upload" class="carInfo">
            <label for="fileupload"> Upload Your Résumé Here!</label>
            <input type="file" name="resume" id="fileupload">
        </div>

        <input type="submit" name="addCareer" value="submit" id="submit">
    </div>
</form>