<?php

require_once "classes/Question.php";

$question= new Question;

if($_GET['action']=='add'){
     $questionname=$_POST['questionname'];
     $result=$question->save($questionname);

     if($result){
         $this->redirect_js('admin/questions.php');
     }else{
         echo "Error!!";
     }
}elseif($_GET['action']=='update'){
    $question_id=$_POST['question_id'];
    $quiz_id=$_POST['quiz_id'];
    $questionname=$_POST['questionname'];
    $result=$question->update($question_id,$quiz_id,$questionname);

    if($result){
        $this->redirect_js('admin/questions.php');
    }
}elseif($_GET['action']=='delete'){
    $question_id=$_POST['question_id'];
    $result=$question->delete($question_id);

    if($result){
        $this->redirect_js('admin/questions.php');
    }
}

?>