<?php
class Hello extends CI_Controller{
	public function index(){
		
		$data = ['nama'=>'Desy Nur Alviah', 'nim'=>'E31191272', 'golongan'=>'MIF B'];
		//c3 - memuat model 'Hello model'
		$this->load->model('Hello_model');

		//Pengambilan objek dari kelas Hello_model dan dimuat di var $model
		$model = $this->Hello_model;

		//Mengambil data dari model
		$a = $model->txt;

		//Membuat data yang akan dikirim ke view
		$data['teks'] = $a;

		//memanggil file view
		$this->load->view('helloview', $data); //file view
	}
}
