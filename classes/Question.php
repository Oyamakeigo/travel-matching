<?php

require_once "Config.php";

Class Question extends Config{
    public function selectAll(){
        $sql="SELECT * FROM questions 
              INNER JOIN quizes ON questions.quiz_id = quizes.quiz_id ";

        $result=$this->conn->query($sql);

        $row=array();
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $rows[]=$row;
            }
            return $rows;
        }else{
            return false;
        }
    }

    public function selectOne($id){
        $sql="SELECT * FROM questions WHERE question_id=$id";
        $result=$this->conn->query($id);

        if($result){
            return $result->fetch_assoc();
        }elseif($this->conn->error){
            echo "Error:" .$this->conn->error;
        }
    }

    public function save($quiz_id,$questionname){
        $sql="INSERT INTO questions(quiz_id,question_name)
              VALUES('$quiz_id','$questionname')";
        
        $result=$this->conn->query($sql);
        if($result){
            return true;
        }else{
            echo "Error:" .$this->conn->error;
        }
    }

    public function update($id,$questionname){
        $sql="UPDATE questions SET question_name='$questionname' WHERE question_id=$id";

        $result=$this->conn->query($id);

        if($result){
            return true;
        }else{
            echo "Error:" .$this->conn->error;
        }
    }

    public function delete($id){
        $sql="DELETE FROM questions WHERE question_id=$id";

        $result = $this->conn->query($sql);

        if($result){
            return true;
        }else{
            echo "Error:" .$this->conn->error;
        }
    }
    public function count_questions(){
        $sql = "SELECT COUNT(*) as total_questions FROM questions";
        $result = $this->conn->query($sql);

        $row = $result->fetch_assoc();

        return $row;
    }
}