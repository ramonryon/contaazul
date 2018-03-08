<?php  

class usersController extends Controller{

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

		if($u->hasPermission('users_view')){
			$data['users_list'] = $u->getList($u->getCompany());

			$this->loadTemplate('users', $data);
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

		if($u->hasPermission('users_view')){
			$p = new Permissions();

			if(isset($_POST['email']) && !empty($_POST['email'])){
				$email = addslashes($_POST['email']);
				$pass = addslashes($_POST['password']);
				$group = $_POST['group'];

				$u->add($email, $pass, $group, $u->getCompany());
				header("Location: ".BASE_URL."users");
			}

			$data['group_list'] = $p->getGroupList($u->getCompany());

			$this->loadTemplate('users_add', $data);
		}else{
			header("Location: ".BASE_URL);
		}

	}


}

?>