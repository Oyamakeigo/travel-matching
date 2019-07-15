<?php

require_once "Config.php";

Class Quiz extends Config{
    public function selectAll(){

        $sql = "SELECT * FROM quizes ORDER BY quiz_id
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
        $sql = "SELECT * FROM quizes WHERE quiz_id=$id";
        $result = $this->conn->query($sql);

        if($result){
            return $result->fetch_assoc();
        }elseif($this->conn->error){
            echo "Error;" .$this->conn->error;
        }
    }

    public function save($category_id,$quizname){

        $sql ="INSERT INTO quizes(category_id,quiz_name)
               VALUES('$category_id','$quizname')";
        
        $result = $this->conn->query($sql);

        if($result){
            return true;
        }else{
            echo "Error:" . $this->conn->error ;
        }
    }

    public function update($id,$quizname){
        $sql ="UPDATE quizes SET quiz_name='$quizname' WHERE quiz_id =$id";

        $result =$this->conn->query($sql);
        if($result){
            return true;
        }else{
            echo "Error:" .$this->conn->error;
        }
    }
    public function delete($id){
        $sql ="DELETE FROM quizes WHERE quiz_id=$id";

        $result = $this->conn->query($sql);

        if($result){
            return true;
        }else{
            echo "Error:" .$this->conn->error;
        }
    }
}

?>