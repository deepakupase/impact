<?php
	class C_Branch extends CI_Controller{
		
		function __construct(){
			parent::__construct();
		}
		
		function add(){
			$this->load->model('branch','mb');
			$this->form_validation->set_rules('branch_name', 'Branch Name', 'required|is_unique[branch.branch_name]');
			
			$data['message'] = '';
			
			if ($this->form_validation->run() == TRUE){
				$this->mb->branch_name = $_POST['branch_name'];
				$this->mb->save();
				
				$data['message'] = 'Branch created successfully';
			}
			
			$this->load->view('core/branch/add',$data);
			
		}
		
		function edit($id){
			$this->load->model('branch','mb');
			
			$data['message'] = '';
			
			$data['object'] = $this->mb->find_by_id($id);
			
			if($data['object']){
				
				$this->form_validation->set_rules('branch_name', 'Branch Name', 'required|is_unique[branch.branch_name]');
				
				if ($this->form_validation->run() == TRUE){
					$this->mb->branch_id = $_POST['branch_id'];
					$this->mb->branch_name = $_POST['branch_name'];
					$this->mb->save();
					
					$data['message'] = 'Branch updated successfully';
					
					$data['object'] = $this->mb;
				}
				
				$this->load->view('core/branch/edit',$data);
			}
			else{
				$data['message'] = 'No such branch exists. Create it!';	
				$this->load->view('core/branch/add',$data);
			}
			
		}
		
		function viewall(){
			$this->load->model('branch','mb');
			$data['objects'] = $this->mb->find_all();
			if(!empty($data['objects']))
			{
				$this->load->view('core/branch/viewall',$data);
			}
			else{
				$data['message'] = 'No branch exists. Create one!';	
				$this->load->view('core/branch/add',$data);
			}
		}
		
		function delete($id){
			$this->load->model('branch','mb');
			$this->mb = $this->mb->find_by_id($id);
			if($this->mb){
				$this->mb->delete();
			}
			redirect('core/c_branch/viewall');
		}
		
	}