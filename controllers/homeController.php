<?php
class homeController extends controller {

	public function index() {
		$data = array();

		$u = new Users();

		if($u->isLogged() == false){
			header("Location: ".BASE_URL."login");
		}

		$this->loadTemplate('home', $data);

	}

}