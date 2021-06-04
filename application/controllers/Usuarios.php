<?php
	defined ('BASEPATH') OR exit('Ação não permitida');


class Usuarios extends CI_Controller{

	public function __construct(){

		parent::__construct();
	}

	public function index(){

			$data = array(
				//"usuarios" => $this->ion_auth->users()->result(), // get all users

			);
			echo 'Cheguei aqui!';
			exit;
			$this->load->view('layout/header.php');
			$this->load->view('usuarios/index.php');
			$this->load->view('layout/footer.php');
		}
	}
