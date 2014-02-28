<?php
	class Alumni_info extends CI_Model{
		var $alumni_id;
		var $fname;
		var $mname;
		var $lname;
		var $gender;
		var $degree_id;
		var $branch_id;
		var $dob;
		var $mar_status;
		var $mar_anniversary;
		var $photo;
		var $p_house_no;
		var $p_street_name;
		var $p_area;
		var $p_city;
		var $p_state;
		var $p_country;
		var $p_postal_code;
		var $c_house_no;
		var $c_street_name;
		var $c_area;
		var $c_city;
		var $c_state;
		var $c_country;
		var $c_postal_code;
		var $email_1;
		var $email_2;
		var $mobile_1;
		var $mobile_2;
		var $home_phone;
		var $work_phone;
		var $year_of_passing;
		
		static $tablename = 'alumni_info';
		static $tableid = 'alumni_id';
		function find_by_id($id){
			$tableid = self::$tableid;
			$resultset = $this->db->get_where(self::$tablename,array($tableid=>$id),1);
			if($resultset->num_rows()==1)
				return array_shift($resultset->result(get_class($this)));
			return false;
		}
		
		function find_all(){
			$resultset = $this->db->get(self::$tablename);
			return $resultset->result(get_class($this));
		}
		
		function save(){
		$tableid = self::$tableid;
			if(isset($this->$tableid)&&$this->$tableid!=''&&$this->$tableid!=0)
				$this->update();
			else
				$this->insert();
		}
		private function insert(){
			$this->db->insert(self::$tablename,$this);
		}
		
		private function update(){
		$tableid = self::$tableid;
			$this->db->where($tableid,$this->$tableid);
			$this->db->update(self::$tablename,$this);
		}
		
		function delete(){
		$tableid = self::$tableid;
			$this->db->where($tableid,$this->$tableid);
			$this->db->delete(self::$tablename);
		}
	}
