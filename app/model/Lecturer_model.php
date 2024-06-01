<?php

class Lecturer_model{
    private $db;

    public function __construct(){
        //create object from database
        $this->db = new Database;

        //check status
        if($this->db == false){
            echo "<script>console.log('Connection failed.' );</script>";
        }else{
            echo "<script>console.log('Connected successfully.' );</script>";
        }

    }

    public function getAllDataLecturer (){
        $arr_data = $this->db->query("select * from tbl_lecturer;");
        $this->db->db_close();
    
        if ($result->num_rows > 0) {
            //Convert to associative array
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $rows;
        } else {
            return[]; //empty array            }
        }
    }

    public function insertDataLecturer ($data) {
        $id = $data['lec_id'];
        $name = $data['lec_name'];
        $email = $data['lec_email'];
        $phone = $data['lec_phone'];
        $sql = "INSERT INTO tbl_lecturer (id, name, email, phone) VALUES ('$id', '$name', '$email', '$phone')";
        if ($this->db->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteDataLecturer ($id) {
        $sql = "DELETE from tbl_lecturer WHERE id = $id";
        if($this->db->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function updateDataLecturer ($data) {
        $id = $data['lec_id_update'];
        $name = $data ['lec_name_update'];
        $email = $data['lec_email_update'];
        $phone = $data['lec_phone_update'];
        $sql = "UPDATE tbl_lecturer SET name='$name', email='$email', phone='$phone' WHERE id='$id'";
        if($this->db->query($sql) === TRUE) {
            return true;
        } else (
            return false;
        )
    }
}
?>