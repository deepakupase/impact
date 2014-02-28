<?php
class Event_registration extends CI_Model{
		var $eventreg_id;
		var $alumni_id;
		var $event_id;
		var $status;
		var $accomodation;
		var $family_member;
		var $arrival_travel;
		var $arrival_datetime;
		var $arrival_detail;
		var $dept_datetime;
		
		
	   
			
		static $tablename = 'event_registration';
		static $tableid = 'eventreg_id';
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