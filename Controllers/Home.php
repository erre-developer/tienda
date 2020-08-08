<?php
	class Home extends Controllers{

		public function __construct()
		{
			parent::__construct();
		}

		public function home(){
			$data['page_id'] = 1;
			$data['tag_page'] = "Home";
			$data['page_title'] = "Página Principal";
			$data['page_name'] = "home";
			$data['page_content'] = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolore quas ipsam tempore, eligendi tenetur, omnis molestias saepe temporibus rem tempora quo quos magni veritatis ipsum quis ea velit natus.";
			$this->views->getView($this,"home",$data);
		}

		public function agregarUsuario()
		{
			$data = $this->model->insertUser("Salvador Foncea",59);
			print_r($data);
		}

		public function verUsuario($id)
		{
			$data = $this->model->select_user($id);
			print_r($data);
		}

		//llama todos los usuarios
		public function usuarios()
		{
			//$data = $this->model->setUser("Richard",31);
			$data = $this->model->select_all_users();
			print_r($data);
		}

		//Actualiza usuario por id
		public function actualizarUsuario()
		{
			//$data = $this->model->setUser("Richard",31);
			$data = $this->model->updateUser(3,"Richad",30);
			print_r($data);
		}

		//Actualiza usuario por id
		public function eliminarUsuario($id)
		{
			//$data = $this->model->setUser("Richard",31);
			$data = $this->model->deleteUser($id);
			print_r($data);
		}
	}
 ?>

