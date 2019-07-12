<?php


require_once "../classes/Category.php";

//create instance
$category = new Category;

 if($_GET['action'] == 'add'){
     $categoryname = $_POST['categoryname'];
     $countryname = $_POST['countryname'];
   
     $result = $category->save($categoryname,$countryname);

     if($result){
        $category->redirect_js('categories.php');
     } else {
         echo "Error!!";
     }
 }elseif($_GET['action'] =='update'){
  $category_id = $_POST['category_id'];
  $categoryname = $_POST['categoryname'];
  $countryname = $_POST['countryname'];

  $result = $category->update($category_id,$categoryname,$countryname);

   if($result){
      $category->redirect_js('categories.php');
   }
 }elseif($_GET['action'] =='delete' ){
      $category_id = $_GET['category_id'];
      $result = $category->delete($category_id);
      if($result){
      $category->redirect_js('categories.php');
      }
    }

?>

