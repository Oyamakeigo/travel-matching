<?php

require_once "Config.php";

Class Question extends Config{
    public function selectAll(){
        $sql="SELECT * FROM questions ORDER BY question_id DESC";

        $result=$this->conn->query($sql);

        $rows=array();
        if($result->$num_rows>0){
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

    public function save($questionname){
        $sql="INSERT INTO questions(question_name)
              VALUES('$questionname')";
        
        $result=$this->conn->query($sql);
        if($result){
            return true;
        }else{
            echo "Error:" .$this->conn->error;
        }
    }

    public function update($id,$questionname){
        $sql="UPDATE questions SET questionname='$questionname' WHERE question_id=$id";

        $result=$this->conn->query($id);

        if($result){
            return true;
        }else{
            echo "Error:" .$this->conn->error;
        }
    }

    public function delete($id){
        $sql="DELETE FROM questions WHERE question_id=$id";

        $result=$this->conn->query($sql);

        if($result){
            return true;
        }else{
            echo "Error:" .$this->conn->error;
        }
    }
}