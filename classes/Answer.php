<?php

require_once "Config.php";

Class Answer extends Config{
    public function selectAll(){

        $sql="SELECT * FROM answers ORDER BY answer_id
              DESC";

        $result=$this->conn->query($sql);

        $rows=array();
        if($result->num_rows>0){
            while ($row=$result->fetch_assoc()){
                $rows[]=$row;
            }
            return $rows;
        }else{
            return false;
        }
    }

    public function selectOne($id){
        $sql="SELECT * FROM answers WHERE answer_id=$id";
        $result=$this->conn->query($sql);

        if($result){
            return $result->conn->fetch_assoc();
        }elseif($this->conn->error){
            echo "Error:" .$this->conn->error;
        }
    }

    public function save($question_id,$answeroption,$answerstatus){
        $sql="INSERT INTO answers(question_id,answer_option,answer_status)
              VALUES('$question_id','$answeroption','$answerstatus')";
        $result=$this->conn->query($sql);

        if($result){
            return true;
        }else{
            echo "Error:" .$this->conn->query($sql);
        }
    }

    public function update($id,$answeroption,$answerstatus){
        $sql="UPDATE answers SET answer_option='$answeroption',answer_status='$answerstatus' WHERE answer_id=$id";

        $result=$this->conn->query($sql);
        if($result){
            return true;
        }else{
            echo "Error:" .$this->conn->query($sql);
        }
    }

    public function delete($id){
        $sql="DELETE FROM answers WHERE answer_id=$id";

        $result=$this->conn->query($sql);

        if($result){
            return true;
        }else{
            echo "Error:" .$this->conn->query($sql);
        }
    }
}

?>