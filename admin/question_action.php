<?php

require_once "../classes/Question.php";

$question= new Question;

if($_GET['action']=='add'){
     $quiz_id = $_POST['quiz_id'];
     $questionname=$_POST['question_name'];
     $result=$question->save($quiz_id,$questionname);

     if($result){
         $question->redirect_js('questions.php');
     }else{
         echo "Error!!";
     }
}elseif($_GET['action']=='update'){
    $question_id=$_POST['question_id'];
    $questionname=$_POST['question_name'];
    $result=$question->update($question_id,$quiz_id,$questionname);

    if($result){
        $question->redirect_js('questions.php');
    }
}elseif($_GET['action']=='delete'){
    $question_id=$_GET['question_id'];
    $result=$question->delete($question_id);

    if($result){
        $question->redirect_js('questions.php');
    }
}

?>