<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	  public function __construct()
	{
	    parent::__construct();
	    $this->load->model('home_models');


	    $this->load->library('session');
	    $this->load->database();
	}
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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($p = 0)
	{
		//SETTING
		//==NAMA SITUS
		$data['sitename'] = "KARDES GALLERY";
		//==Notice (sementara gak bisa di disable males pengen beli treuk)
		$data['notice'] = "Selamat Datang di KARDES GALLERY . Disini adalah website yang berisi foto2 warga di kota kardes . Foto didapatkan dari Discord KARDES ROLEPLAY  bagian Foto Warga";
		//END OF Setting

		$data['content'] = $this->home_models->listImage($p);

		$data['prevBtnStyle'] = "";
		$data['prevBtnLink'] = "";
		$data['nextBtnStyle'] = "";
		$data['nextBtnLink'] = "";

		if ($p == 0) {
			$data['prevBtnStyle'] = "display:none";
		} else {
			$data['prevBtnLink'] = "/halaman/" . (String)($p - 1);
		}

		if ($data['content'] == "") {
				$data['nextBtnStyle'] = "display:none" ;
		  $data['content'] = "<div class='col-12'><div class='alert alert-danger'>Tidak ada foto lagi yang tersedia </p></div></div>";
		} else {
			$data['nextBtnLink'] = "/halaman/" . (String)($p + 1);
		}

		$this->load->view('home/home',$data);
	}
}
