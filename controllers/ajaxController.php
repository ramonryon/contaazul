<?php  

class ajaxController extends Controller{

	public function __construct(){
		$u = new Users();
		if($u->isLogged() == false){
			header("Location: ".BASE_URL."login");
			exit;
		}
	}

	public function index(){

	}

	public function search_clients(){
		$data = array();
		$u = new Users();
		$u->setLoggedUser();
		$company = new Companies($u->getCompany());
		$c = new Clients();

		if(isset($_GET['q']) && !empty($_GET['q'])){
			$q = addslashes($_GET['q']);

			$clients = $c->searchClientByName($q, $u->getCompany());

			foreach($clients as $citem){
				$data[] = array(
					'name' => $citem['name'],
					'link' => BASE_URL.'clients/edit/'.$citem['id']
				);
			}
		}

		echo json_encode($data);
	}

}

?>