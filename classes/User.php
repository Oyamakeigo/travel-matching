<?php

require_once "Config.php";

class User extends Config{
    //login
    public function login($username,$password){
        $hashed_password =md5($password);
        $sql="SELECT * FROM users WHERE username = '$username' AND password= '$hashed_password' ";

        $result=$this->conn->query($sql);
        if($result){
            $row=$result->fetch_assoc();
            //distingish admin or viewer
            $_SESSION['user_id']=$row['user_id'];

          if($result->num_rows>0){
              if($row['status']=='a'){
                 $this->redirect_js("index.php");
              }else{
                 $this->redirect_js("../user/index.php");
              }
          }else{
             echo "Username and Password error.";
          }
        }else{
            echo "Username and Password error.";
        }

         
    }

    public function selectAll(){
        $sql="SELECT * FROM users ORDER BY updated_at DESC";

        $result = $this->conn->query($sql);

        $rows = array();
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }else{
            return $this->conn->error;
        }
    }
    //get id
    public function selectOne($id){
        $sql="SELECT * FROM users WHERE user_id=$id";
        $result=$this->conn->query($sql);

        if($result){
            return $result->fetch_assoc();
        }elseif($this->conn->error){
            echo "Error:".$this->conn->error;
        }
    }

    public function save($username,$password,$email,$bio,$firstname,$lastname){

        $new_password=md5($password);
        $sql="INSERT INTO users(username,password,email,bio,firstname,lastname)
              VALUES('$username','$new_password','$email','$bio','$firstname','$lastname')";
        $result=$this->conn->query($sql);

        if($result){
            return true;
        }else{
            echo "Error:" .$this->conn->error;
        }
        
    }
    public function update($id,$username,$password,$email,$bio,$firstname,$lastname){
         $sql="UPDATE users SET username='$username',password='$password',email='$email',bio='$bio',firstname='$firstname',lastname='$lastname'
               WHERE user_id=$id";
        
        $result=$this->conn->query($sql);
        if($result){
            return true;
        }else{
            echo "Error:".$this->conn->error($sql);
        }
    }
    public function delete($id){
        $sql ="DELETE FROM users WHERE user_id=$id";

        $result=$this->conn->query($sql);

        if($result){
            return true;
        }else{
            echo "Error:" .$this->conn->error;
        }
    }
   


}

?>