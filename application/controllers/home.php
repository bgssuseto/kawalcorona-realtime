<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	
	{
		//data Indonesia

		$readapi = file_get_contents('https://api.kawalcorona.com/indonesia');
		$data['indonesia'] = json_decode($readapi,true);
		$data['judul'] = "Aplikasi Kawal Corona";




		//Data Provinsi

		$readapiProv = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi');
		$data['provinsi'] = json_decode($readapiProv,true);
		
		// Data Negara
		$readapiall = file_get_contents('https://api.kawalcorona.com/');
		$data['all'] = json_decode($readapiall,true);
		
		// Data Global Positif
		$readapiglobal = file_get_contents('https://api.kawalcorona.com/positif/');
		$data['globalpos'] = json_decode($readapiglobal,true);

		//Sembuh
		$readapiglobalsem = file_get_contents('https://api.kawalcorona.com/sembuh/');
		$data['globalsem'] = json_decode($readapiglobalsem,true);
		
		$readapiglobalmeni = file_get_contents('https://api.kawalcorona.com/meninggal/');
		$data['globalmeni'] = json_decode($readapiglobalmeni,true);


		//Load View 

		$this->load->view('template/header',$data);
		$this->load->view('indonesia/index',$data);
		$this->load->view('template/footer');

	}




}
