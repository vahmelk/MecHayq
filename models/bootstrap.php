<?php
	// var_dump($ROOT);
	// echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; 
	class bootstrap{		
		protected $ROOT;
		private $validFile = 'controller/home.php';
		public $valid;
			function __construct($ROOT)
		{	
			$this->ROOT=$ROOT;	
			if(isset($_GET['url'])){ 
				$url = $_GET['url'];
				$url= rtrim($url,'/');
				$url = explode('/',$url);
				if (isset($url[0])) {
					if(isset($url[1])){
					}
				$file = 'controller/' .$url[0].'.php';
					if (file_exists($file)) {
						$this->validFile =  $file;
					}
					else{
						$this->validFile='controller/error.php';
					}
				}
			}else{
				$this-> loadHome();
			}
			
			 require_once $this->validFile;
			
		}
		protected function loadHome(){
			$this->validFile='controller/home.php';
	
			//new home;
		}

	}

	
?>