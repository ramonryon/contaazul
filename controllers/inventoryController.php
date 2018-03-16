<?php  

class inventoryController extends Controller{

	public function __construct(){
		$u = new Users();
		if($u->isLogged() == false){
			header("Location: ".BASE_URL."login");
			exit;
		}
	}

	public function index(){
		$data = array();
		$u = new Users();
		$u->setLoggedUser();
		$company = new Companies($u->getCompany());
		$data['company_name'] = $company->getName();
		$data['user_email'] = $u->getEmail();

		if($u->hasPermission('inventory_view')){
			$i = new Inventory();
			$offset = 0;

			$data['inventory_list'] = $i->getList($offset, $u->getCompany());

			$data['edit_permission'] = $u->hasPermission('inventory_add');
			$data['edit_permission'] = $u->hasPermission('inventory_edit');

			$this->loadTemplate('inventory', $data);
		}else{
			header("Location: ".BASE_URL);
		}

	}

	public function add(){
		$data = array();
		$u = new Users();
		$u->setLoggedUser();
		$company = new Companies($u->getCompany());
		$data['company_name'] = $company->getName();
		$data['user_email'] = $u->getEmail();

		if($u->hasPermission('inventory_view')){

			if(isset($_POST['name']) && !empty($_POST['name'])){
				
			}

			$this->loadTemplate('inventory_add', $data);
		}

	}

}

?>