<?php
// namespace App\Models;
// use CodeIgnitor\Model;
class StudentModel extends CI_Model
{
    protected $table ='student_details';
    //protected $primarykey = 'id';
    //protected $allowedfields = ['s_no, , first_name, last_name, email, phone, course, added_on'];

    public function getStudents(){
        $query = $this->db->get('student_details');
        return $query->result();
    }

    public function insertStudents($data){
        return $this->db->insert('student_details', $data);
    }

    public function editstudent($id){
        $query = $this->db->get_where('student_details', ['id' => $id]);
        return $query->row();
    }

    public function updateStudent($data, $id){
        $this->db->update('student_details', $data, ['id' => $id]);
    }

    public function deleteStudent($id){
        return $this->db->delete('student_details', ['id' => $id]);
    }
}
?>
