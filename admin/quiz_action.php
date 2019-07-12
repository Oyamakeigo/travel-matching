<?php

require_once "classes/Quiz.php";

$quiz= new Quiz;

if($_GET['action']=='add'){
     $quizname=$_POST['quiz_name'];
     $result=$quiz->save($quizname);

     if($result){
         $this->redirect_js('admin/quizzes.php');
     }else{
         echo "Error!!";
     }
}elseif($_GET['action']=='update'){
    $quiz_id=$_POST['quiz_id'];
    $category_id=$_POST['category_id'];
    $quizname=$_POST['quizname'];
    $result=$quiz->update($quiz_id,$category_id,$quizname);

    if($result){
        $this->redirect_js('admin/quizzes.php');
    }
}elseif($_GET['action']=='delete'){
    $quiz_id=$_POST['quiz_id'];
    $result=$quiz->delete($quiz_id);

    if($result){
        $this->redirect_js('admin/quizzes.php');
    }
}

?>