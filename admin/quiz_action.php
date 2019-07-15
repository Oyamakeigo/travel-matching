<?php

require_once "../classes/Quiz.php";

$quiz= new Quiz;

if($_GET['action']=='add'){
     $category_id = $_POST['cat'];
     $quizname=$_POST['quiz_name'];
     $result=$quiz->save($category_id,$quizname);

     if($result){
         $quiz->redirect_js('quizzes.php');
     }else{
         echo "Error!!";
     }
}elseif($_GET['action']=='update'){
    $quiz_id=$_POST['quiz_id'];
    $quizname=$_POST['quiz_name'];
    $result=$quiz->update($quiz_id,$quizname);

    if($result){
        $quiz->redirect_js('quizzes.php');
    }
}elseif($_GET['action']=='delete'){
    $quiz_id=$_GET['quiz_id'];
    $result=$quiz->delete($quiz_id);

    if($result){
        $quiz->redirect_js('quizzes.php');
    }
}

?>