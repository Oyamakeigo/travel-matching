<?php

require_once "Config.php";

Class Category extends Config{
    public function selectAll(){

        $sql="SELECT * FROM categories ORDER BY category_id DESC";

        $result=$this->conn->query($sql);

        $rows=array();

        if($result->num_rows >0){
            while($row=$result->fetch_assoc()){
                $rows[]=$row;
            }
            return $rows;
        }else{
            return false;
        }
     
    }
    public function  selectOne($id){
        $sql="SELECT * FROM categories WHERE category_id=$id";
        $result=$this->conn->query($sql);

        if($result){
            return $result->fetch_assoc();
        }elseif($this->conn->error){
            echo "Error:" .$this->conn->error;
        }
    }
    public function save($country_id,$categoryname){
        $sql = "INSERT INTO categories(country_id,category_name)
                VALUES('$country_id','$categoryname')";
        $result = $this->conn->query($sql);

        if($result){
            return true;
        }else{
            echo "Error:" .$this->conn->error;
        }
    }
    public function update($id,$categoryname){
        $sql = "UPDATE categories SET category_name='$categoryname' WHERE category_id=$id";

        $result = $this->conn->query($sql);

        if($result){
            return true;
        }else{
            echo "Error:" .$this->conn->error;
        }
    }
    public function delete($id){
        $sql = "DELETE FROM categories WHERE category_id=$id";

        $result=$this->conn->error;

        if($result){
            return true;
        }else{
            echo "Error:" .$this->conn->error;
        }
    }

 
}