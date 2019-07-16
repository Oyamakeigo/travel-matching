<?php

require_once "Config.php";

Class Country extends Config{
    public function selectAll(){
        $sql="SELECT * FROM countries ORDER BY country_id DESC";

        $result=$this->conn->query($sql);

        $rows=array();
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                 $rows[]=$row;
             }
             return $rows;
        } else{
            return false;
        }
    }

    public function selectOne($id){
        $sql="SELECT * FROM countries WHERE country_id=$id";
        $result=$this->conn->query($sql);

        if($result){
            return $result->fetch_assoc();
        }elseif($this->conn->error){
            echo "Error;" .$this->conn->error;
        }
    }

    public function save($countryname,$countrydescription){

        $sql="INSERT INTO countries(country_name,country_description)
              VALUES('$countryname','$countrydescription')";
        $result=$this->conn->query($sql);

        if($result){
            return true;
        }else{
            echo "Error:" .$this->conn->error;
        }
    }

    public function update($id,$countryname,$countrydescription){
        $sql="UPDATE countries SET country_name='$countryname',country_description='$countrydescription' WHERE country_id=$id";

        $result=$this->conn->query($sql);

        if($result){
            return true;
        }else{
            echo "Error:" .$this->conn->error;
        }
    }

    public function delete($id){
        $sql="DELETE FROM countries WHERE country_id=$id";

        $result=$this->conn->query($sql);

        if($result){
            return true;
        }else{
            echo "Error:" .$this->conn->error;
        }
    }
    public function count_countries(){
        $sql = "SELECT COUNT(*) as total_countries FROM countries";
        $result = $this->conn->query($sql);

        $row = $result->fetch_assoc();

        return $row;
    }
}


?>