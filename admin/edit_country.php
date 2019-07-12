<?php
require_once "../classes/Country.php";

$country= new Country;
$id = $_GET['country_id'];
$get_country = $country->selectOne($id);

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
              <!-- action has 3 action ex)delete,update,add -->
                <form action="country_action.php?action=update" method="post" >
                    <input type="hidden" name="country_id" value="<?php echo $_GET['country_id'];?>">
                 <div class="form-group">
                  <label>Country Name</label>
                  <input type="text" name="countryname" class="form-control" value="<?php echo $get_country['countryname'];?>">
                 </div>

                 <div class="form-group">
                  <label>Country Description</label>
                  <input type="text" name="countrydescription" class="form-control" value="<?php echo $get_country['countrydescription'];?>">
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