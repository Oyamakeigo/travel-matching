<?php
require_once("common/head.php");
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="add_user.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate User</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="add_user.php" class="text-decoration-none">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Users</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Add User</div>
                    </div>
                    <div class="col-auto">
                    <i class="far fa-user fa-2x text-gray-300">

                      <?php
                        require_once "../classes/User.php";

                        $users = new User;

                        $count_users = $users->count_users();
                        echo $count_users['total_users'];

                        

                        ?>
                      </i>
                    </div>
                  </div>
                </div>
              </div>
</a>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
            <a href="add_country.php" class="text-decoration-none">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Countries</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Add Country</div>
                    </div>
                    <div class="col-auto">
                      <i class="fa-2x fas fa-globe-europe text-gray-300">
                      <?php
                        require_once "../classes/Country.php";

                        $countries = new Country;

                        $count_countries = $countries->count_countries();
                        echo $count_countries['total_countries'];

                        

                        ?>
                      </i>
                    </div>
                  </div>
                </div>
              </div>
</a>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
            <a href="add_category.php" class="text-decoration-none">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">category</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Add Category</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300">
                        <?php
                        require_once "../classes/Category.php";

                        $categories = new Category;

                        $count_categories = $categories->count_categories();
                        echo $count_categories['total_categories'];

                        

                        ?>
                      </i>
                    </div>
                  </div>
                </div>
              </div>
</a>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
            <a href="add_question.php" class="text-decoration-none">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Question</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Add Question</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300">
                      <?php
                        require_once "../classes/Question.php";

                        $questions = new Question;

                        $count_questions = $questions->count_questions();
                        echo $count_questions['total_questions'];

                        

                        ?>
                      </i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
</a>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">User Overview</h6>
                </div>
                <!-- Card Body -->
                <table class="table table-striped">
                          <thead class="bg-dark text-light">
                              <th>ID</th>
                              <th>Username</th>
                              <th>email</th>
                              <th>bio</th>
                              <th>Created at</th>
                              <th>Updated at</th>
                              <th>firstname</th>
                              <th>lastname</th>
                              <th>Action</th>
                            
                          </thead>
                          <tbody>
                              <?php

                              require_once "../classes/User.php";


                              $users = new User;

                              $get_users = $users->selectAll();

                              if($get_users){
                                  foreach($get_users as $key=>$row){
                                      $id= $row['user_id'];
                                      echo "<tr>";
                                      echo "<td>". $row['user_id'] ."</td>";
                                      echo "<td>". $row['username'] ."</td>";
                                      echo "<td>". $row['email'] ."</td>";
                                      echo "<td>". $row['bio'] ."</td>";
                                      echo "<td>". $row['created_at'] ."</td>";
                                      echo "<td>". $row['updated_at'] ."</td>";
                                      echo "<td>". $row['firstname'] ."</td>";
                                      echo "<td>". $row['lastname'] ."</td>";
                                      echo "<td>
                                            <a href='edit_user.php?user_id=$id' class='btn btn-primary btn-sm'>Edit</a>";
                                            ?>

                                        <a href='user_action.php?action=delete&user_id=<?php echo $id;?>' class='btn btn-danger btn-sm' onclick='return confirm("Are you sure you wanna delete");'>Delete</a>

                                  </td>

                                  </tr>
                        <?php
                                  }
                              }else{
                                  echo "<tr><td colspan='7' class'text-center'>Nothing to show</td></tr>";
                              }

                              ?>
                          </tbody>
                      </table>
              </div>
        
      
          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Country Overview</h6>
                </div>
                <!-- Card Body -->
                <table class="table table-striped">
                          <thead class="bg-dark text-light">
                              <th>ID</th>
                              <th>Country Name</th>
                              <th>Country Description</th>
                              <th>Action</th>
                            
                          </thead>
                          <tbody>
                              <?php
                              require_once "../classes/Country.php";

                              $countries = new Country;
                              $get_countries = $countries->selectAll();

                              if($get_countries){
                                  foreach($get_countries as $key=>$row){
                                      $id= $row['country_id'];
                                      echo "<tr>";
                                      echo "<td>". $row['country_id'] ."</td>";
                                      echo "<td>". $row['country_name'] ."</td>";
                                      echo "<td>". $row['country_description'] ."</td>";
                                      echo "<td>
                                            <a href='edit_country.php?country_id=$id' class='btn btn-primary btn-sm'>Edit</a>";
                                            ?>

                                        <a href='country_action.php?action=delete&country_id=<?php echo $id;?>' class='btn btn-danger btn-sm' onclick='return confirm("Are you sure you wanna delete");'>Delete</a>

                                  </td>

                                  </tr>
                        <?php
                                  }
                              }else{
                                  echo "<tr><td colspan='7' class'text-center'>Nothing to show</td></tr>";
                              }

                              ?>
                          </tbody>
                      </table>
              </div>
           <div class="row">

            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Category Overview</h6>
                </div>
                <!-- Card Body -->
                <table class="table table-striped">
                          <thead class="bg-dark text-light">
                              <th>ID</th>
                              <th>Country Name</th>
                              <th>Category Name</th>
                              <th>Action</th>
                            
                          </thead>
                          <tbody>
                              <?php
                              require_once "../classes/Category.php";


                              $categories = new Category;
             

                              $get_categories = $categories->selectAll();

                              if($get_categories){
                                  foreach($get_categories as $key=>$row){
                                      $id= $row['category_id'];
                                      echo "<tr>";
                                      echo "<td>". $row['category_id'] ."</td>";
                                      echo "<td>". $row['country_name'] ."</td>";
                                      echo "<td>". $row['category_name'] ."</td>";
                                   
                                 
                                      echo "<td>
                                            <a href='edit_category.php?category_id=$id' class='btn btn-primary btn-sm'>Edit</a>";
                                            ?>

                                        <a href='category_action.php?action=delete&category_id=<?php echo $id;?>' class='btn btn-danger btn-sm' onclick='return confirm("Are you sure you wanna delete");'>Delete</a>

                                  </td>

                                  </tr>
                        <?php
                                  }
                              }else{
                                  echo "<tr><td colspan='7' class'text-center'>Nothing to show</td></tr>";
                              }

                              ?>
                          </tbody>
                      </table>
              </div>

              <div class="row">

              <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Quiz Overview</h6>
                </div>
                <!-- Card Body -->
                <table class="table table-striped">
                          <thead class="bg-dark text-light">
                              <th>ID</th>
                              <th>Category Name</th>
                              <th>Quiz Name</th>
                              <th>Action</th>
                            
                          </thead>
                          <tbody>
                              <?php
                              require_once "../classes/Quiz.php";

                              $quizzes = new Quiz;


                              $get_quizzes = $quizzes->selectAll();

                              if($get_quizzes){
                                  foreach($get_quizzes as $key=>$row){
                                      $id= $row['quiz_id'];
                                      echo "<tr>";
                                      echo "<td>". $row['quiz_id']."</td>";
                                      echo "<td>". $row['category_name'] ."</td>";
                                      echo "<td>". $row['quiz_name'] ."</td>";
                                      echo "<td>
                                            <a href='edit_quiz.php?quiz_id=$id' class='btn btn-primary btn-sm'>Edit</a>";
                                            ?>

                                        <a href="quiz_action.php?action=delete&quiz_id=<?php echo $id;?>" class='btn btn-danger btn-sm' onclick='return confirm("Are you sure you wanna delete");'>Delete</a>

                                  </td>

                                  </tr>
                        <?php
                                  }
                              }else{
                                  echo "<tr><td colspan='7' class'text-center'>Nothing to show</td></tr>";
                              }

                              ?>
                          </tbody>
                      </table>
              </div>
       </div>

  
    
      <!-- Footer -->
      <footer class="sticky-footer bg-white container-fluid">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->



  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
