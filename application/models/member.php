<?php
class Member extends CI_Model{
		var $member_id;
		var $college_id;
		var $member_name;
	    var $branch_id;
		var $year;
		var $gender;
		var $dob;
		var $contact_no;
		var $email;
		var $photo;
		var $event_id;
		var $position_id;
		var $committee_id;
		var $password;
		var $role_id;
		var $status;
		var $degree_id;
		
		
		
		
		static $tablename = 'Member';
		static $tableid = 'member_id';
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