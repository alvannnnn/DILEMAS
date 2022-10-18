<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->view('forminput');
	}
	public function tabel()
	{
		$data['nama'] = $this->input->post('nama');
		$data['nim'] = $this->input->post('nim');
		$data['kelas'] = $this->input->post('kelas');
		$data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
		$data['tempat_lahir'] = $this->input->post('tempat_lahir');
		$data['alamat'] = $this->input->post('alamat');
		$data['jenis_kelamin'] = $this->input->post('kelamin');
		$data['agama'] = $this->input->post('agama');

		
		$this->load->view('hasil', $data);
	}
}
