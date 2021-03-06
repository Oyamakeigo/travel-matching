<?php
include "../admin/common/head.php";
require_once "../classes/Country.php";

$countries = new Country;

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <div class="container">
      <div class="row justify-content-center mt-5">
          <div class="col-12">
              <div class="card">
                  <div class="card-body">
                      <table class="table table-striped">
                          <thead class="bg-dark text-light">
                              <th>ID</th>
                              <th>Country Name</th>
                              <th>Country Description</th>
                              <th>Action</th>
                            
                          </thead>
                          <tbody>
                              <?php

                              $get_countries = $countries->selectAll();

                              if($get_countries){
                                  foreach($get_countries as $key=>$row){
                                      $id= $row['country_id'];
                                      echo "<tr>";
                                      echo "<th>". $row['country_id'] ."</th>";
                                      echo "<th>". $row['country_name'] ."</th>";
                                      echo "<th>". $row['country_description'] ."</th>";
                                      echo "<th>
                                            <a href='edit_country.php?country_id=$id' class='btn btn-primary btn-sm'>Edit</a>";
                                            ?>

                                        <a href='country_action.php?action=delete&country_id=<?php echo $id;?>' class='btn btn-danger btn-sm' onclick='return confirm("Are you sure you wanna delete");'>Delete</a>

                                  </th>

                                  </tr>
                        <?php
                                  }
                              }else{
                                  echo "<tr><th colspan='7' class'text-center'>Nothing to show</th></tr>";
                              }

                              ?>
                          </tbody>
                      </table>
                      <a href="add_country.php" class="btn btn-info" name="save">Add</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>