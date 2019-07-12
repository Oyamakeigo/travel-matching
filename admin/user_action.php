<?php
  require_once "../classes/User.php";

  $user =new User;

  if($_GET['action']=='add'){
      $username=$_POST['username'];
      $firstname=$_POST['firstname'];
      $lastname=$_POST['lastname'];
      $email=$_POST['email'];
      $hashed_password=$_POST['password'];
      $bio=$_POST['bio'];
      $result=$user->save($username,$email,$password,$bio,$firstname,$lastname);

      if($result){
         $user->redirect_js('users.php');
      }else{
          echo "Error!!!";
      }
  }elseif($_GET['action']=='update'){
      $user_id=$_POST['user_id'];
      $username=$_POST['username'];
      $firstname=$_POST['firstname'];
      $lastname=$_POST['lastname'];
      $email=$_POST['email'];
      $bio=$_POST['bio'];
      $result=$user->update($user_id,$username,$email,$bio,$firstname,$lastname);
      
        if($result) {
         $user->redirect_js('users.php');
      }      
  }elseif($_GET['action']=='delete'){
      $user_id=$_GET['user_id'];
      $result=$user->delete($user_id);
      if($result){
        $user->redirect_js('users.php');
      }
  }elseif($_GET['action'] =='login'){
    $username =$_POST['username'];
    $hashed_password =$_POST['password'];
    $result =$user->login($username,$hashed_password);

    if($result){
       $user->redirect_js('users.php');
    }
}