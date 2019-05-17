<?php
require_once './restaurantAdminHeader.php';
?>

<div class="content">
            <main>
                <div class="container-fluid">
                  <h2>Careers</h2>
                  <div class="table-responsive">
                    <table class='table table-light'>
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Degree</th>
                          <th>Education</th>
                          <th>Former Employer</th>
                          <th>Resume</th>
                        </tr>
                      </thead>
                      <tbody>
                    <?php
                    include "./includes/careers/listCareer.php";
                    ?>
                    </tbody>
                    </table>
                  </div>
                </div>
            </main>
        </div>
    </div>

</body>
</html>