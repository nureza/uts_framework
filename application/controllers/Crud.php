<?php 

/**
 * 
 */
class Crud extends CI_Controller
{
	
	public function index()
	{
		$data['karyawan_details'] = $this->crud_model->getAllKaryawan();
		$this->load->view('crud_view' , $data );
	}


	public function addKaryawan(){

		$this->form_validation->set_rules('nama','Karyawan Nama', 'trim|required');
		$this->form_validation->set_rules('gender','Karyawan Gender', 'trim|required');
		$this->form_validation->set_rules('alamat','Karyawan Alamat', 'trim|required');
		$this->form_validation->set_rules('jabatan','Karyawan Jabatan', 'trim|required');
		$this->form_validation->set_rules('telp','Karyawan Telp ', 'trim|required');


		if ($this->form_validation->run()==false) {

			$data_error = [

					'error' => validation_errors()
			];
			
			$this->session->set_flashdata($data_error);
		}

		else{

		$result = $this->crud_model->insertKaryawan([

		 	'nama'=> $this->input->post('nama'),
		 	'gender'=>$this->input->post('gender'),
		 	'alamat'=>$this->input->post('alamat'),
		 	'jabatan'=>$this->input->post('jabatan'),
		 	'telp'=> $this->input->post('telp')

		 ]);
		if($result){
			$this->session->set_flashdata('Inserted','Data Berhasil Disimpan!!!');
		}

		}
		redirect('crud');
	}
	
	public function editKaryawan($id){
		

		$data['singleKaryawan'] = $this->crud_model->getSingleKaryawan($id); 
		$this->load->view('edit_view',$data);

	}

	public function update($id){

		$this->form_validation->set_rules('nama','Karyawan Nama', 'trim|required');
		$this->form_validation->set_rules('gender','Karyawan Gender', 'trim|required');
		$this->form_validation->set_rules('alamat','Karyawan Alamat', 'trim|required');
		$this->form_validation->set_rules('jabatan','Karyawan Jabatan', 'trim|required');
		$this->form_validation->set_rules('telp','Karyawan Telp ', 'trim|required');


		if ($this->form_validation->run()==false) {

			$data_error = [

					'error' => validation_errors()
			];
			
			$this->session->set_flashdata($data_error);
		}

		else{

		$result = $this->crud_model->updateKaryawan([

		 	'nama'=> $this->input->post('nama'),
		 	'gender'=>$this->input->post('gender'),
		 	'alamat'=>$this->input->post('alamat'),
		 	'jabatan'=>$this->input->post('jabatan'),
		 	'telp'=> $this->input->post('telp')

		 ],$id);
		if($result){
			$this->session->set_flashdata('Updated','Data Berhasil Diupdate!!!');
		}

		}
		redirect('crud');
	}
	public function deleteKaryawan($id){
		$result = $this->crud_model->deleteISi($id);
		if($result == true){

			$this->session->set_flashdata('deleted', 'Data yang dipilih telah terhapus!!');
		}
		redirect('crud');
	}
}
 ?>