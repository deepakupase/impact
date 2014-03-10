<?php
	class C_Alumni_Info extends CI_Controller{
		
		function __construct(){
			parent::__construct();
		}
		
		function add(){
			$this->load->model('alumni_info','mb');
			//$this->form_validation->set_rules('alumni_id', 'Alumni ID', 'required|is_unique[alumni_info.alumni_id]');
			$this->form_validation->set_rules('fname', 'First Name', 'required|is_unique[alumni_info.fname]');
			$this->form_validation->set_rules('mname', 'Middle Name', 'required|is_unique[alumni_info.mname]');
			$this->form_validation->set_rules('lname', 'Last Name', 'required|is_unique[alumni_info.lname]');
			$this->form_validation->set_rules('gender', 'Gender', 'required|is_unique[alumni_info.gender]');
			$this->form_validation->set_rules('degree_id', 'Degree ID', 'required|is_unique[alumni_info.degree_id]');
			$this->form_validation->set_rules('branch_id', 'Branch ID', 'required|is_unique[alumni_info.branch_id]');
			$this->form_validation->set_rules('dob', 'Date Of Birth', 'required|is_unique[alumni_info.dob]');
			$this->form_validation->set_rules('mar_status', 'Maritial Status', 'required|is_unique[alumni_info.mar_status]');
			$this->form_validation->set_rules('mar_anniversary', 'Marriage Anniversary', 'required|is_unique[alumni_info.mar_anniversary]');
			$this->form_validation->set_rules('photo', 'Photo', 'required|is_unique[alumni_info.photo]');
			$this->form_validation->set_rules('p_house_no', 'House No.', 'required|is_unique[alumni_info.p_house_no]');
			$this->form_validation->set_rules('p_street_name', 'Street Name', 'required|is_unique[alumni_info.p_street_name]');
			$this->form_validation->set_rules('p_area', 'Area', 'required|is_unique[alumni_info.p_area]');
			$this->form_validation->set_rules('p_city', 'City', 'required|is_unique[alumni_info.p_city]');
			$this->form_validation->set_rules('p_state', 'State', 'required|is_unique[alumni_info.p_state]');
			$this->form_validation->set_rules('p_country', 'Country', 'required|is_unique[alumni_info.p_country]');
			$this->form_validation->set_rules('p_postal_code', 'Postal Code', 'required|is_unique[alumni_info.p_postal_code]');
			$this->form_validation->set_rules('c_house_no', 'Alternate House No', 'required|is_unique[alumni_info.c_house_no]');
			$this->form_validation->set_rules('c_street_name', 'Alternate Street Name', 'required|is_unique[alumni_info.c_street_name]');
			$this->form_validation->set_rules('c_area', 'Alternate Area', 'required|is_unique[alumni_info.c_area]');
			$this->form_validation->set_rules('c_city', 'Alternate City', 'required|is_unique[alumni_info.c_city]');
			$this->form_validation->set_rules('c_state', 'Alternate State', 'required|is_unique[alumni_info.c_state]');
			$this->form_validation->set_rules('c_country', 'Alternate Country', 'required|is_unique[alumni_info.c_country]');
			$this->form_validation->set_rules('c_postal_code', 'Alternate Postal Code', 'required|is_unique[alumni_info.c_postal_code]');
			$this->form_validation->set_rules('email_1', 'Email ID', 'required|is_unique[alumni_info.email_1]');
			$this->form_validation->set_rules('email_2', 'Alternate Email ID', 'required|is_unique[alumni_info.email_2]');
			$this->form_validation->set_rules('mobile_1', 'Mobile Number', 'required|is_unique[alumni_info.mobile_1]');
			$this->form_validation->set_rules('mobile_2', 'Alternate Mobile Number', 'required|is_unique[alumni_info.mobile_2]');
			$this->form_validation->set_rules('home_phone', 'Home (Phone)', 'required|is_unique[alumni_info.home_phone]');
			$this->form_validation->set_rules('work_phone', 'Work (Phone)', 'required|is_unique[alumni_info.work_phone]');
			$this->form_validation->set_rules('year_of_passing', 'Year Of Passing', 'required|is_unique[alumni_info.year_of_passing]');
			
			
			$data['message'] = '';
			
			if ($this->form_validation->run() == TRUE){
			//	$this->mb->alumni_id = $_POST['alumni_id'];
				$this->mb->fname = $_POST['fname'];
				$this->mb->mname = $_POST['mname'];
				$this->mb->lname = $_POST['lname'];
				$this->mb->gender = $_POST['gender'];
				$this->mb->degree_id = $_POST['degree_id'];
				$this->mb->branch_id = $_POST['branch_id'];
				$this->mb->dob = $_POST['dob'];
				$this->mb->mar_status = $_POST['mar_status'];
				$this->mb->mar_anniversary = $_POST['mar_anniversary'];
				$this->mb->photo = $_POST['photo'];
				$this->mb->p_house_no = $_POST['p_house_no'];
				$this->mb->p_street_name = $_POST['p_street_name'];
				$this->mb->p_area = $_POST['p_area'];
				$this->mb->p_city = $_POST['p_city'];
				$this->mb->p_state = $_POST['p_state'];
				$this->mb->p_country = $_POST['p_country'];
				$this->mb->p_postal_code = $_POST['p_postal_code'];
				$this->mb->c_house_no = $_POST['c_house_no'];
				$this->mb->c_street_name = $_POST['c_street_name'];
				$this->mb->c_area = $_POST['c_area'];
				$this->mb->c_city = $_POST['c_city'];
				$this->mb->c_state = $_POST['c_state'];
				$this->mb->c_country = $_POST['c_country'];
				$this->mb->c_postal_code = $_POST['c_postal_code'];
				$this->mb->email_1 = $_POST['email_1'];
				$this->mb->email_2 = $_POST['email_2'];
				$this->mb->mobile_1 = $_POST['mobile_1'];
				$this->mb->mobile_2 = $_POST['mobile_2'];
				$this->mb->home_phone = $_POST['home_phone'];
				$this->mb->work_phone = $_POST['work_phone'];
				$this->mb->year_of_passing = $_POST['year_of_passing'];
				$this->mb->save();
				
				$data['message'] = 'Alumni Information created successfully';
			}
			
			$this->load->view('core/alumni_info/add',$data);
			
		}
		
		function edit($alumni_id){
			$this->load->model('alumni_info','mb');
			
			$data['message'] = '';
			
			$data['object'] = $this->mb->find_by_id($alumni_id);
			
			if($data['object']){
				
			//$this->form_validation->set_rules('alumni_id', 'Alumni ID', 'required|is_unique[alumni_info.alumni_id]');
			$this->form_validation->set_rules('fname', 'First Name', 'required|is_unique[alumni_info.fname]');
			$this->form_validation->set_rules('mname', 'Middle Name', 'required|is_unique[alumni_info.mname]');
			$this->form_validation->set_rules('lname', 'Last Name', 'required|is_unique[alumni_info.lname]');
			$this->form_validation->set_rules('gender', 'Gender', 'required|is_unique[alumni_info.gender]');
			$this->form_validation->set_rules('degree_id', 'Degree ID', 'required|is_unique[alumni_info.degree_id]');
			$this->form_validation->set_rules('branch_id', 'Branch ID', 'required|is_unique[alumni_info.branch_id]');
			$this->form_validation->set_rules('dob', 'Date Of Birth', 'required|is_unique[alumni_info.dob]');
			$this->form_validation->set_rules('mar_status', 'Maritial Status', 'required|is_unique[alumni_info.mar_status]');
			$this->form_validation->set_rules('mar_anniversary', 'Marriage Anniversary', 'required|is_unique[alumni_info.mar_anniversary]');
			$this->form_validation->set_rules('photo', 'Photo', 'required|is_unique[alumni_info.photo]');
			$this->form_validation->set_rules('p_house_no', 'House No.', 'required|is_unique[alumni_info.p_house_no]');
			$this->form_validation->set_rules('p_street_name', 'Street Name', 'required|is_unique[alumni_info.p_street_name]');
			$this->form_validation->set_rules('p_area', 'Area', 'required|is_unique[alumni_info.p_area]');
			$this->form_validation->set_rules('p_city', 'City', 'required|is_unique[alumni_info.p_city]');
			$this->form_validation->set_rules('p_state', 'State', 'required|is_unique[alumni_info.p_state]');
			$this->form_validation->set_rules('p_country', 'Country', 'required|is_unique[alumni_info.p_country]');
			$this->form_validation->set_rules('p_postal_code', 'Postal Code', 'required|is_unique[alumni_info.p_postal_code]');
			$this->form_validation->set_rules('c_house_no', 'Alternate House No', 'required|is_unique[alumni_info.c_house_no]');
			$this->form_validation->set_rules('c_street_name', 'Alternate Street Name', 'required|is_unique[alumni_info.c_street_name]');
			$this->form_validation->set_rules('c_area', 'Alternate Area', 'required|is_unique[alumni_info.c_area]');
			$this->form_validation->set_rules('c_city', 'Alternate City', 'required|is_unique[alumni_info.c_city]');
			$this->form_validation->set_rules('c_state', 'Alternate State', 'required|is_unique[alumni_info.c_state]');
			$this->form_validation->set_rules('c_country', 'Alternate Country', 'required|is_unique[alumni_info.c_country]');
			$this->form_validation->set_rules('c_postal_code', 'Alternate Postal Code', 'required|is_unique[alumni_info.c_postal_code]');
			$this->form_validation->set_rules('email_1', 'Email ID', 'required|is_unique[alumni_info.email_1]');
			$this->form_validation->set_rules('email_2', 'Alternate Email ID', 'required|is_unique[alumni_info.email_2]');
			$this->form_validation->set_rules('mobile_1', 'Mobile Number', 'required|is_unique[alumni_info.mobile_1]');
			$this->form_validation->set_rules('mobile_2', 'Alternate Mobile Number', 'required|is_unique[alumni_info.mobile_2]');
			$this->form_validation->set_rules('home_phone', 'Home (Phone)', 'required|is_unique[alumni_info.home_phone]');
			$this->form_validation->set_rules('work_phone', 'Work (Phone)', 'required|is_unique[alumni_info.work_phone]');
			$this->form_validation->set_rules('year_of_passing', 'Year Of Passing', 'required|is_unique[alumni_info.year_of_passing]');
				
				if ($this->form_validation->run() == TRUE){
				$this->mb->alumni_id = $_POST['alumni_id'];
				$this->mb->fname = $_POST['fname'];
				$this->mb->mname = $_POST['mname'];
				$this->mb->lname = $_POST['lname'];
				$this->mb->lname = $_POST['gender'];
				$this->mb->degree_id = $_POST['degree_id'];
				$this->mb->branch_id = $_POST['branch_id'];
				$this->mb->lname = $_POST['dob'];
				$this->mb->lname = $_POST['mar_status'];
				$this->mb->lname = $_POST['mar_anniversary'];
				$this->mb->lname = $_POST['photo'];
				$this->mb->lname = $_POST['p_house_no'];
				$this->mb->lname = $_POST['p_street_name'];
				$this->mb->lname = $_POST['p_area'];
				$this->mb->lname = $_POST['p_city'];
				$this->mb->lname = $_POST['p_state'];
				$this->mb->lname = $_POST['p_country'];
				$this->mb->lname = $_POST['p_postal_code'];
				$this->mb->lname = $_POST['c_house_no'];
				$this->mb->lname = $_POST['c_street_name'];
				$this->mb->lname = $_POST['c_area'];
				$this->mb->lname = $_POST['c_city'];
				$this->mb->lname = $_POST['c_state'];
				$this->mb->lname = $_POST['c_country'];
				$this->mb->lname = $_POST['c_postal_code'];
				$this->mb->email_1 = $_POST['email_1'];
				$this->mb->lname = $_POST['email_2'];
				$this->mb->mobile_1 = $_POST['mobile_1'];
				$this->mb->lname = $_POST['mobile_2'];
				$this->mb->home_phone = $_POST['home_phone'];
				$this->mb->lname = $_POST['work_phone'];
				$this->mb->year_of_passing = $_POST['year_of_passing'];
				$this->mb->save();
				
				$data['message'] = 'Alumni Information Updated successfully';
					
					$data['object'] = $this->mb;
				}
				
				$this->load->view('core/alumni_info/edit',$data);
			}
			else{
				$data['message'] = 'No such Alumni exists. Create it!';	
				$this->load->view('core/alumni_info/add',$data);
			}
			
		}
		
		function viewall(){
			$this->load->model('alumni_info','mb');
			$data['objects'] = $this->mb->find_all();
			if(!empty($data['objects']))
			{
				$this->load->view('core/alumni_info/viewall',$data);
			}
			else{
				$data['message'] = 'No Alumni exists. Create one!';	
				$this->load->view('core/alumni_info/add',$data);
			}
		}
		
		function delete($id){
			$this->load->model('alumni-info','mb');
			$this->mb = $this->mb->find_by_id($alumni_id);
			if($this->mb){
				$this->mb->delete();
			}
			redirect('core/c_alumni_info/viewall');
		}
		
	}