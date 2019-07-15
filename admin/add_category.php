<?php
include "../admin/common/head.php";

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
                         <form action="category_action.php?action=add" method="post">

                         <div class="form-group">
                             <label for="">Country name</label>
                             <select name="country_id" id="" class="form-control">
                                <?php
                                require_once "../classes/Country.php";

                                $country = new Country;
                                
                                $get_country = $country->selectAll();

                                foreach($get_country as $key => $row){
                                    $country_id = $row['country_id'];
                                    $country_name = $row['country_name'];
                                    echo "<option value='$country_id'>$country_name</option>";
                                }

                                ?>
                             </select>
                            </div>
                       
                        <div class="form-group">
                             <label for="">Category</label>
                             <input type="text" name="category_name" id="" class="form-control">
                         </div>

                         <button class="btn btn-primary" type="submit" name="add">Save</button>
                        </form>
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