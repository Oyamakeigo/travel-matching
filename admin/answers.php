<?php
include "../admin/common/head.php";
require_once "../classes/Answer.php";

$answers = new Answer;

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
                              <th>Question ID</th>
                              <th>Answer Option</th>
                              <th>Answer Status</th>
                              <th>Action</th>
                            
                          </thead>
                          <tbody>
                              <?php

                              $get_answers = $answers->selectAll();

                              if($get_answers){
                                  foreach($get_answers as $key=>$row){
                                      $id= $row['answer_id'];
                                      echo "<tr>";
                                      echo "<td>". $row['answer_id'] ."</td>";
                                      echo "<td>". $row['question_id'] ."</td>";
                                      echo "<td>". $row['answer_option'] ."</td>";
                                      echo "<td>". $row['answer_status'] ."</td>";
                                      echo "<td>
                                            <a href='edit_answer.php?answer_id=$id' class='btn btn-primary btn-sm'>Edit</a>";
                                            ?>

                                        <a href='answer_action.php?action=delete&answer_id=<?php echo $id;?>' class='btn btn-danger btn-sm' onclick='return confirm("Are you sure you wanna delete");'>Delete</a>

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
                      <a href="add_answer.php" class="btn btn-info" name="save">Add</a>
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