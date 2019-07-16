<?php

require_once "../classes/Answer.php";

$answer= new Answer;

if($_GET['action']=='add'){
     $question_id =$_POST['question_id'];
     $answeroption=$_POST['answer_option'];
     $answerstatus=$_POST['answer_status'];
     $result=$answer->save($question_id,$answeroption,$answerstatus);

     if($result){
         $answer->redirect_js('answers.php');
     }else{
         echo "Error!!";
     }
}elseif($_GET['action']=='update'){
    $answer_id=$_POST['answer_id'];
    $answeroption=$_POST['answer_option'];
    $answerstatus=$_POST['answer_status'];
    $result=$answer->update($answer_id,$question_id,$answeroption,$answerstatus);

    if($result){
        $answer->redirect_js('answers.php');
    }
}elseif($_GET['action']=='delete'){
    $answer_id=$_GET['answer_id'];
    $result=$answer->delete($answer_id);

    if($result){
        $answer->redirect_js('answers.php');
    }
}

?>