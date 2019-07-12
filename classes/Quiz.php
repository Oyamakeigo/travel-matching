<?php

require_once "Config.php";

Class Quiz extends Config{
    public function selectAll(){

        $sql = "SELECT * FROM quizzes ORDER BY quiz_id
         DESC";

        $result = $this->conn->query($sql);

        $rows = array();
        if($result->num_rows > 0){
            while ($row = $result ->fetch_assoc()){
                $rows[]=$row;
                
            }
            return $rows;
        }else{
            return false;
        }
    }

    public function selectOne($id){
        $sql = "SELECT * FROM quizzes WHERE quiz_id=$id";
        $result = $this->conn->query($sql);

        if($result){
            return $result->fetch_assoc();
        }elseif($this->conn->error){
            echo "Error;" .$this->conn->error;
        }
    }

    public function save($quizname){

        $sql ="INSERT INTO quizzes(quiz_name)
               VALUES('$quizname')";
        
        $result = $this->conn->query($sql);

        if($result){
            return true;
        }else{
            echo "Error:" . $this->conn->error ;
        }
    }

    public function update($id,$quizname){
        $sql ="UPDATE quizzes SET quizname='$quizname' WHERE quiz_id =$id";

        $result =$this->conn->query($sql);
        if($result){
            return true;
        }else{
            echo "Error:" .$this->conn->error;
        }
    }
    public function delete($id){
        $sql ="DELETE FROM quizzes WHERE quiz_id=$id";

        $result = $this->conn->query($sql);

        if($result){
            return true;
        }else{
            echo "Error:" .$this->conn->error;
        }
    }
}

?>