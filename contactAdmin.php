<?php
require_once './restaurantAdminHeader.php';
?>

<div class="content">
            <main>
                <div class="container-fluid">
                  <h2>Contact</h2>
                  <div class="table-responsive">
                    <table class='table table-light'>
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Email</th>
                          <th>Comments</th>
                        </tr>
                      </thead>
                      <tbody>
                    <?php
                    include "./includes/contact/listContact.php";
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