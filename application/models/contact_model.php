<?php
/**
 * Created by PhpStorm.
 * User: Uddeepa Wijerathna
 * Date: 10/22/2017
 * Time: 4:28 PM
 */

class contact_model extends CI_Model
{
    /**
     *
     */
    public function insertdata(){

        //login
//            $data=array('email'=>$this->input->post('Email',TRUE),
//                'NIC'=>$this->input->post('Name',TRUE)
//                );
            //contact
            $data1=array(

                'message'=>$this->input->post('Message',TRUE),
                'student_StudentID' =>$this->input->post('Name',TRUE)


                );
        $query = $this->db->query('SELECT StudentID FROM student');

        foreach ($query->result_array() as $row)
        {
            if (!empty(data1[1])) {
                if($row['StudentID']==data1[1]){

                    $this->db->insert('contact',$data1);
                    echo "successfully inserted";
                }
            }

        }








    }
}
?>





































