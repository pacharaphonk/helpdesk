<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Data_model extends CI_Model {

        public function all()
        {
                $query = $this->db->get('tbl_case');
                return $query->result();
        }
        public function list_case()
        {
                $query =$this->db->get('tbl_case_type');
                return $query->result();
        }
        public function list_loc()
        {
                $query =$this->db->get('tbl_case_loc');
                return $query->result();
        }
        public function list_name()
        {
                $query =$this->db->get('tbl_name_status');
                return $query->result();
        }

        public function insert_case()
        {
                $filename = $this->upload->file_name;
                $data = array(
                        'case_type' => $this->input->post('case_type'),
                        'case_detail' => $this->input->post('case_detail'),
                        'case_loc' => $this->input->post('case_loc'),
                        'p_status' => $this->input->post('p_status'),
                        'p_name' => $this->input->post('p_name'),
                        'p_email' => $this->input->post('p_email'),
                        'p_img' => $filename
                );
                $this->db->insert('tbl_case', $data);
        }

        public function lastid($p_email)
        {
                $this->db->select_max('id');
                $this->db->from('tbl_case c');
                $this->db->where('c.p_email',$p_email);
                $query = $this->db->get();
                if($query->num_rows() > 0){
                        $data = $query->row();
                        return $data;
                }
                return FALSE;
        }

        public function get_detail($id){
                $this->db->select('c.*');
                $this->db->from('tbl_case c');
                $this->db->where('c.id',$id);
                $query = $this->db->get();
                if($query->num_rows() > 0){
                        $data = $query->row();
                        return $data;
                }
                return FALSE;
        }

        public function update_job()
        {
                //Set ???/???/??? ???????????? ?????????????????????????????????????????????????????????
                //date_default_timezone_set('Asia/Bangkok');
                //index.php
                //https://www.codexworld.com/how-to/change-timezone-in-codeigniter/
                $data = array(
                    'case_status' => $this->input->post('case_status'),
                    'tech_id' => $this->input->post('tech_id'),
                    'tech_name' => $this->input->post('tech_name'),
                    'case_update_log' => $this->input->post('case_update_log'),
                    'case_update' => date('Y-m-d H:i:s')
                );
                $this->db->where('id', $this->input->post('id'));
                $query=$this->db->update('tbl_case',$data);
        }

        //count by status 1
        public function status1()
        {
                $this->db->select('case_status, COUNT(id) AS totalstatus1');
                $this->db->from('tbl_case');
                $this->db->where('case_status',1);
                $query = $this->db->get();
                if($query->num_rows() > 0){
                        $data = $query->row();
                        return $data;
                }
                return FALSE;
        }

        //count by status 2
        public function status2()
        {
                $this->db->select('case_status, COUNT(id) AS totalstatus2');
                $this->db->from('tbl_case');
                $this->db->where('case_status',2);
                $query = $this->db->get();
                if($query->num_rows() > 0){
                        $data = $query->row();
                        return $data;
                }
                return FALSE;
        }


        //count by status 3
        public function status3()
        {
                $this->db->select('case_status, COUNT(id) AS totalstatus3');
                $this->db->from('tbl_case');
                $this->db->where('case_status',3);
                $query = $this->db->get();
                if($query->num_rows() > 0){
                        $data = $query->row();
                        return $data;
                }
                return FALSE;
        }


        //count by status 4
        public function status4()
        {
                $this->db->select('case_status, COUNT(id) AS totalstatus4');
                $this->db->from('tbl_case');
                $this->db->where('case_status',4);
                $query = $this->db->get();
                if($query->num_rows() > 0){
                        $data = $query->row();
                        return $data;
                }
                return FALSE;
        }

        //count by status foreach
        public function count_status($status_id)
        {
            $this->db->select('case_status, COUNT(id) AS totalstatus1');
            $this->db->group_by('case_status');
            $query = $this->db->get('tbl_case');
            return $query->result();
        }

        //query by status
        // *function ?????????????????? query ??????????????????????????????????????????????????? ??????????????????????????????????????????????????? Jobs/bystatus
        public function by_status($status_id)
        {
            $this->db->where('case_status',$status_id);
            $query = $this->db->get('tbl_case');
            return $query->result();
        }

        //query by case_type
        public function by_case_type($case_type)
        {
            $this->db->where('case_type',$case_type);
            $query = $this->db->get('tbl_case');
            return $query->result();
        }

        public function by_case_loc($case_loc)
        {
            $this->db->where('case_loc',$case_loc);
            $query = $this->db->get('tbl_case');
            return $query->result();
        }

        //query count by case_type
        public function countbycasetype()
        {
            $this->db->select('case_type, COUNT(id) as casetotal');
            $this->db->group_by('case_type');
            $this->db->order_by('casetotal','desc');
            $query = $this->db->get('tbl_case');
            return $query->result();
        }     

        //query count by status
        public function countbycasestatus()
        {
            $this->db->select('case_status, COUNT(id) as statustotal');
            $this->db->group_by('case_status');
            $this->db->order_by('statustotal','desc');
            $query = $this->db->get('tbl_case');
            return $query->result();
        }

        public function countbycaseloc()
        {
            $this->db->select('case_loc, COUNT(id) as loctotal');
            $this->db->group_by('case_loc');
            $this->db->order_by('loctotal','desc');
            $query = $this->db->get('tbl_case');
            return $query->result();
        }

        public function count_case_date()
        {
            $this->db->select('DATE_FORMAT(d.date_save,"%d-%m-%Y") as datesave, COUNT(id) as dtotal');
            $this->db->from('tbl_case as d');
            $this->db->group_by('DATE_FORMAT(d.date_save,"%d%")');
            $query = $this->db->get('');
            return $query->result();    
        }

        public function count_case_m()
        {
            $this->db->select('DATE_FORMAT(d.date_save,"%M-%Y") as datesavem, COUNT(id) as dtotal');
            $this->db->from('tbl_case as d');
            $this->db->group_by('DATE_FORMAT(d.date_save,"%m%")');
            $query = $this->db->get('');
            return $query->result();    
        }

        public function count_case_y()
        {
            $this->db->select('DATE_FORMAT(d.date_save,"%Y") as datesavey, COUNT(id) as dtotal');
            $this->db->from('tbl_case as d');
            $this->db->group_by('DATE_FORMAT(d.date_save,"%Y%")');
            $query = $this->db->get('');
            return $query->result();    
        }

        public function count_case_form()
        {
            $ds = $this->input->post('ds');
            $de = $this->input->post('de');
            /* echo $ds .' x '.$de;
            exit; */
            $de = $de .' 23:59:59';
            
                $this->db->select('*');
                $this->db->from('tbl_case');
                $this->db->where('date_save >=',$ds);
                $this->db->where('date_save <=',$de);
                $query = $this->db->get();
                return $query->result();    
        }
}