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

	}//end clas controllers Home
 ?>

