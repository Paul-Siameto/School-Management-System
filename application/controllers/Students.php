<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {

	

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
//}


	function __construct(){
		parent::__construct();
		$this->load->model('StudentModel');
	}
	public function index()
	{
		//$data = $this->db->query("SELECT * FROM student_details");
		// print_r($data);
		// echo(count($data));
		// $values = array();
		// foreach($data as $dt)
		// {
		// 	array_push($values, $dt);
		// }
		// $data = ['nao','jj','fdsf'];
		//echo($data->num_rows());
		//exit();
		$this->load->model('StudentModel');
		//$studi['student'] = $this->StudentModel->getStudents(); 
		//$this->load->view('students', $studi);

		$student = $this->StudentModel->getStudents();
		$this->load->view('students', ['student' =>$student]);
		
		// return view('shop');
	}

	public function create()
	{
		$this->load->view('create');
	}

    public function store(){
		// echo(base_url());
		// exit();
		
		$this->form_validation->set_rules('s_no', 'Admition No.', 'required');
		$this->form_validation->set_rules('first_name', 'First Name', 'required'); 
		$this->form_validation->set_rules('last_name', 'Last Name', 'required'); 
		$this->form_validation->set_rules('email', 'Email', 'required'); 
		$this->form_validation->set_rules('phone', 'Phone', 'required'); 
		$this->form_validation->set_rules('course', 'Course', 'required');

		//$this->form_validation->set_message('rule','Error Message');

		$data = [
			's_no' => $this->input->post('s_no'), 
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'course' => $this->input->post('course')
		];
		
		 if($this-> form_validation->run()){
			//$this->load->model('StudentModel', 'emp');
			$this->StudentModel->insertStudents($data);
			redirect(base_url('students/'));
		}
		
		else{
			//$this->Create();
			// print_r ($this->form_validation->error_array());
			// exit();
			// redirect(base_url('index.php/Students/create'));
			$this->load->view('create',$data);
		}
		$data = [
			's_no' => $this->input->post('s_no'),
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'course' => $this->input->post('course')
		];
		
	}
	public function edit($id)
	{
		$this->load->model("StudentModel");
		$data['student_details'] = $this->StudentModel->editstudent($id);
        $this->load->view('edit', $data);
	}
	public function update($id){
		
		$this->form_validation->set_rules('s_no', 'Admition No.', 'required');
		$this->form_validation->set_rules('first_name', 'First Name', 'required'); 
		$this->form_validation->set_rules('last_name', 'Last Name', 'required'); 
		$this->form_validation->set_rules('email', 'Email', 'required'); 
		$this->form_validation->set_rules('phone', 'Phone', 'required'); 
		$this->form_validation->set_rules('course', 'Course', 'required');
		$this->form_validation->set_message('rule','Error Message');

	if($this->form_validation->run()):
		$data = [
			's_no' => $this->input->post('s_no'),
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'course' => $this->input->post('course')
		];
		$this->load->model("StudentModel");
		$this->StudentModel->updateStudent($data, $id);
		redirect(base_url('students'));

	else:
		$this->edit($id);
	
	endif;

	}
	public function delete($id){
		$this->load->model('StudentModel');
		$this->StudentModel->deleteStudent($id);
		redirect(base_url('students'));
	}
	//public function Registration(){
		//echo('Hae there!');
		//exit();
		//$this->load->view('registration');
	//}
}
?>