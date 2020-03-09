<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdministrasiGalleryX extends CI_Controller {

	  public function __construct()
	{
	    parent::__construct();
	    $this->load->model('admin_models');


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
	public function index()
	{
		if (isset($_SESSION['aid'])){
		$aaidi = $_SESSION['aid'];




	 $data['sitename'] = $this->config->item('sitename', 'asede');
	 $data['sitedesc'] = $this->config->item('siteheading', 'asede');
	 $data['sitedescx'] = $this->config->item('sitedesc', 'asede');

	 $data['alerttext'] = "";
	 $data['alertstyle'] = "display:none";

	 if (isset($_GET['msg'])) {
				 $data['alerttext'] = htmlentities($_GET['msg']);
				 $data['alertstyle'] = "";
	 }

		$this->load->view('admin/header',$data);
		$this->load->view('admin/upload',$data);

	} else {
		header("Location: /AdministrasiGalleryX/login");
		die("[KRDSGallery] Redirecting..");
	}
	}

	public function login()
	{
		if (isset($_SESSION['aid'])){
		     $aaidi = $_SESSION['aid'];
		     header("Location: /AdministrasiGalleryX/");
		     die("Sudah Login");
		    } else {

		    }

		    $data['sitename'] = $this->config->item('sitename', 'asede');
		    $data['sitedesc'] = $this->config->item('siteheading', 'asede');
		    $data['sitedescx'] = $this->config->item('sitedesc', 'asede');

		    $data['alerttext'] = "";
		    $data['alertstyle'] = "display:none";

		    if (isset($_GET['msg'])) {
		    			$data['alerttext'] = htmlentities($_GET['msg']);
		    			$data['alertstyle'] = "";
		    }

		    $this->load->view('admin/header',$data);
		  	$this->load->view('admin/login',$data);

	}

	public function handleLogin()
	{
		if (!isset($_POST['username']) OR !isset($_POST['password'])) {
	     show_404();
	   }
	   $asede = $this->admin_models->handleLogin();

	   if ($asede == "") {
	     header("Location: /AdministrasiGalleryX/login/?msg=Username Atau Password Salah");

	   } else {
	     $this->session->set_userdata('aid', $asede);


	     header("Location: /AdministrasiGalleryX/");
	      die("[KRDSGallery] admin sudah login");
	   }
	}

	public function handleUpload() {
		if (isset($_SESSION['aid'])){
	 $aaidi = $_SESSION['aid'];
	 	$this->admin_models->handleUpload();
	} else {
		header("Location: /masuk/?msg=Silahkan Login Untuk Melanjutkan");
		die("Belum Login");
	}


	}

	public function logout()
{

	$this->session->sess_destroy();
	header("Location: /AdministrasiGalleryX/login/");
	  die("[TOSimulator2020] sudah logout");
	}
}
